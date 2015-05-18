<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Dish;
use App\Http\DishNum;
use \Mail;

class WelcomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//	public function __construct()
//	{
//		$this->middleware('guest');
//	}

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('welcome.index');
    }

    public function menu()
    {
        $dishes = Dish::all();
        return view('welcome.menu', compact('dishes'));
    }

    public function addDish(Request $request)
    {
        $dishId = $request->get('dishId');
        Session::push('dishIds', $dishId);
        return response()->json($dishId);
    }

    public function removeDish(Request $request)
    {
        $dishId = $request->get('dishId');
        while (!(($key = array_search($dishId, Session::get('dishIds'))) === false)) {
            Session::forget('dishIds.' . $key);
        }

        return response()->json($dishId);
    }

    public function clear()
    {
        Session::flush();
    }

    public function all()
    {
        dd(Session::get('dishIds'));
    }


    public function order()
    {
        $dishes = array();
        if (count(Session::get('dishIds')) > 0) {
            $data = array_count_values(Session::get('dishIds'));
            foreach ($data as $dishId => $count) {
                $dn = new DishNum();
                $dish = Dish::find($dishId);
                $dn->dish = $dish;
                $dn->count = $count;
                $dishes[] = $dn;
            }
        }
        return view('welcome.order', compact('dishes'));
//		return view('welcome.neworder');
    }

    public function email(Request $request)
    {
        $email = 'he-dq@foxmail.com';
//        $email = 'niu2yue@gmail.com';
        $name = '';
        $subject = 'You hava a new order!';

        //content
//        $customTime = $request->input('consumeTime');
        $customTime = '';
        $customName = $request->input('name');
        $customPhone = $request->input('phone');
        $order = Session::get('dishIds');
//dd(array_count_values($order));
        $data = ['email' => $email, 'name' => $name, 'subject' => $subject,
            'customName' => $customName, 'customTime' => $customTime, 'customPhone' => $customPhone, 'order' => $order];
        Mail::send('emails.testmail', $data, function ($message) use ($data) {
            $message->to($data['email'])->subject($data['subject']);
        });
        return 'Your email has been sent and we will serve you ASAP !';
    }

    public function contact()
    {
        return view('welcome.contact');
    }
}

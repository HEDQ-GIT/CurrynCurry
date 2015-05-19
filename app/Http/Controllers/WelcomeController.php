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
        $itemno = count(Session::get('dishIds'));

        return view('welcome.menu', compact('dishes'))->with('itemno', $itemno);
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
        $ball = $request->get('ball');

        if ($ball == 'true') {
            while (!(($key = array_search($dishId, Session::get('dishIds'))) === false)) {
                Session::forget('dishIds.' . $key);
            }
        }
        else {
            $key = array_search($dishId, Session::get('dishIds'));
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
//        $email = 'he-dq@foxmail.com';
        $email = 'niu2yue@gmail.com';
        $name = '';
        $subject = 'You hava a new order!';

        //content
        $customTime = $request->input('consumeTime');
        $customName = $request->input('name');
        $customPhone = $request->input('phone');
        $amount = $request->get('amount');
//        dd($amount);

        $result = array();
        $arr = array_count_values(Session::get('dishIds'));
        foreach($arr as $id => $no) {
            $dn = new DishNum();
            $dish = Dish::find($id);
            $dn->dish = $dish;
            $dn->count = $no;
            $result[] = $dn;
        }

        $data = ['email' => $email, 'name' => $name, 'subject' => $subject,
            'customName' => $customName, 'customTime' => $customTime, 'customPhone' => $customPhone,
            'result' => $result, 'amount' => $amount];
        Mail::send('emails.testmail', $data, function ($message) use ($data) {
            $message->to($data['email'])->subject($data['subject']);
        });
        return 'We are waiting for you!';
    }

    public function contact()
    {
        return view('welcome.contact');
    }
}

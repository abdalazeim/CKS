<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    
    public function index()
    {
         $customers = Customer::latest()->paginate(5);

        return view('customers.index',compact('Customer'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
               return view('customers.create');


    }
    public function store(Request $request)
    {
        $request->validate([

            'fullname' => 'required',

            'phone' => 'required',

        ]);


        Customers::create($request->all());

   

        return redirect()->route('customers.index')

                        ->with('success','Customer created successfully.');
    }
    public function show(Customer $customer)
    {
               return view('customers.show',compact('customers'));


    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([

            'fullname' => 'required',

            'phone' => 'required',
        ]);

        $customer->update($request->all());

  

        return redirect()->route('customers.index')

                        ->with('success','customer updated successfully');
    }

    public function destroy(Customer $customer)
    {
       $customers->delete();

  

        return redirect()->route('customers.index')

                        ->with('Customers','Customer deleted successfully');
    }

}
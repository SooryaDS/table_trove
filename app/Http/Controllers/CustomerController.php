<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    /**
     * Display a listing of the customers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all customers with pagination
        $customers = Customer::paginate(10);
        return view('customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new customer.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Show the customer creation form
        return view('customer.create');
    }

    /**
     * Store a newly created customer in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
         // Validate the request data
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email|unique:customers,email',
             'contact_number' => 'required|string|max:20',
             'password' => 'required|string|min:8|confirmed',
         ]);

         // Create a new customer
         $customer = Customer::create([
             'name' => $validatedData['name'],
             'email' => $validatedData['email'],
             'contact_number' => $validatedData['contact_number'],
             'password' => Hash::make($validatedData['password']),
             'email_verified_at' => now(), // Optionally set as verified
         ]);

         // Redirect to the customer's detail page
         return redirect()->route('customer.show', $customer->id)
                          ->with('success', 'Customer created successfully.');
     }

    /**
     * Display the specified customer.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        // Show the customer details
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified customer.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        // Show the customer edit form
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified customer in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Customer $customer)
     {
         // Validate the request data
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'email' => [
                 'required',
                 'email',
                 Rule::unique('customer')->ignore($customer->id),
             ],
             'contact_number' => 'required|string|max:20',
             'password' => 'nullable|string|min:8|confirmed',
         ]);

         // Update customer details
         $customer->name = $validatedData['name'];
         $customer->email = $validatedData['email'];
         $customer->contact_number = $validatedData['contact_number'];

         if (!empty($validatedData['password'])) {
             $customer->password = Hash::make($validatedData['password']);
         }

         $customer->save();

         // Redirect to the customer's detail page
         return redirect()->route('customer.show', $customer->id)
                          ->with('success', 'Customer updated successfully.');
     }

    /**
     * Remove the specified customer from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        // Delete the customer
        $customer->delete();

        // Redirect to the customer list
        return redirect()->route('customer.index')
                         ->with('success', 'Customer deleted successfully.');
    }
}

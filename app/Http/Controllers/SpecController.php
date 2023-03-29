<?php

namespace App\Http\Controllers;

use App\Spec;
use Illuminate\Http\Request;

class SpecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $specs = Spec::latest()->paginate(5);

        return view('specs.index',compact('specs'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
               return view('specs.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'college' => 'required',

            'spec' => 'required',

        ]);

  

      Spec::create($request->all());

   

        return redirect()->route('specs.index')

                        ->with('success','Spec created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spec  $spec
     * @return \Illuminate\Http\Response
     */
    public function show(Spec $spec)
    {
               return view('specs.show',compact('spec'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spec  $spec
     * @return \Illuminate\Http\Response
     */
    public function edit(Spec $spec)
    {
               return view('specs.edit',compact('spec'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spec  $spec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spec $spec)
    {
        $request->validate([

            'college' => 'required',

            'spec' => 'required',
        ]);

  

       $spec->update($request->all());

  

        return redirect()->route('specs.index')

                        ->with('success','Spec updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spec  $spec
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spec $spec)
    {
       $spec->delete();

  

        return redirect()->route('specs.index')

                        ->with('success','Spec deleted successfully');
    }
}

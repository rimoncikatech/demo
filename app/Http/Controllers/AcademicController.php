<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicController extends Controller
{

    public function aboutus() {
        return view('academic.aboutus');
    }

    public function dean_head_and_co_ordinator() {
        return view('academic.dean_head_and_co_ordinator');
    }

    public function faculty_members() {
        return view('academic.faculty_members');
    }

    public function degrees_offered() {
        return view('academic.degree_offered');
    }

    public function short_courses() {
        return view('academic.short_courses');
    }

    public function examinations() {
        return view('academic.examinations');
    }
    public function publications()
    {
        return view('academic.publication');
    }

    public function academic_calender() {
        return view('academic.academic_calender');
    }

    public function careercounselling() {
        return view('academic.careercounselling');
    }

    public function vc() {
        return view('administration.vc');
    }
    public function provc() {
        return view('administration.provc');
    }

    public function treasurer() {
        return view('administration.treasurer');
    }

    public function Administration_Registrar() {
        return view('administration.Administration_Registrar');
    }

    public function proctor() {
        return view('administration.proctor');
    }

    public function controller(){
        return view('administration.controller');
    }

    public function cco(){
        return view('administration.cco');
    }

    public function finance(){
        return view('administration.finance');
    }

    public function branding() {
        return view('administration.branding');
    }

    public function admin()
    {
        return view('administration.admin');
    }
    public function pro() {
        return view('administration.pro');
    }

    public function IT(){
        return view('administration.IT');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

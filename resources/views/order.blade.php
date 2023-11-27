@extends('layouts.page')
@section('mainContent')
<div class="container mt-5">
    <h1 style="width: fit-content; ">Your Order</h1>
    <div style="display: flex; align-items: center; padding: 32px; 
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); border-radius: 12px;">
        <div>
            <h2 style="font-size: 22px ">Toyota Corolla</h2>
            <img src="/mobil.png" alt="" style="width: 300px; margin-right: 40px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
            border-radius: 8px; background-color: gainsboro">
        </div>
        <div style="margin-left: auto; margin-right: auto">
            <div style="display: flex; margin-left: auto">
                <div style="display: flex; flex-direction: column; margin-right: 2rem">
                    <p style="font-weight: bold; font-size: 20px">Start Date</p>
                    <p style="border: 1px solid black; padding: 2px; border-radius: 4px; text-align: center; font-weight: 600">24 November 2023</p>
                </div>
                <div style="display: flex; flex-direction: column">
                    <p style="font-weight: bold; font-size: 20px">Start Time</p>
                    <p style="border: 1px solid black; padding: 2px; border-radius: 4px; text-align: center; font-weight: 600">09 : 00</p>
                </div>
            </div>
            <div style="display: flex; ">
                <div style="display: flex; flex-direction: column; margin-right: 2rem">
                    <p style="font-weight: bold; font-size: 20px">End Date</p>
                    <p style="border: 1px solid black; padding: 2px; border-radius: 4px; text-align: center; font-weight: 600">24 November 2023</p>
                </div>
                <div style="display: flex; flex-direction: column">
                    <p style="font-weight: bold; font-size: 20px">End Time</p>
                    <p style="border: 1px solid black; padding: 2px; border-radius: 4px; text-align: center; font-weight: 600">09 : 00</p>
                </div>
            </div>
        </div>
        <div style="width: fit-content; display: flex; flex-direction: column; gap: 32px">
            <div style="background-color: #AEDEFC; padding: 4px; border-radius: 4px;">
                <img src="/pencil.png" alt="" style="width: 22px">
            </div>
            <div style="background-color: #AEDEFC; padding: 4px; border-radius: 4px;">
                <img src="/trash.png" alt="" style="width: 22px">
            </div>         
        </div>
    </div>
</div>
@endsection
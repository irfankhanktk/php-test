@extends('layouts.app')

@section('content')
<div class="container">
    <!-- {{$name}}
    @foreach ($list as $user)
        Hello, {{ $user }} <br />
    @endforeach -->
    <div class="d-flex justify-content-center">
        <!-- <div class="col-md-2 mr-auto p-5 bg-primary">Flex item</div>
  <div class="d-flex col-md-10 p-5 bg-dark">
      <div class="md m-2 bg-white">Flex item 2</div>
      <div class="p-2 bg-white">Flex item 3</div>
  </div> -->
        <!-- <div class="card-header text-center">Add Friend</div> -->
        <!-- <div class="card-body">
            <form method="POST" action="">
                <div class="d-flex mb-2 flex-column flex-sm-row md-flex-column justify-content-between">
                    <div class="form-group col-md-5">
                        <div>
                            <label for="name">Emp Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                        <div>
                            <label for="usr">Emp Address</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-md btn-sm">
                        Submit
                    </button>
                </div>
            </form>
        </div> -->

        <div class="d-flex flex-column w-100">
            <img style="margin-bottom:20px;height:30px;width:40px"
                src="https://img.freepik.com/free-psd/isolated-opened-notebook_125540-1292.jpg?size=626&ext=jpg&ga=GA1.2.1976934267.1679490355&semt=sph"
                alt="logo">
            <!--table 01 here  -->
            <div class="table-responsive col-md-6" style="margin-bottom:30px;">
                <table class="table table-striped table-bordered" style="border: 3px solid;">
                    <thead style="background:gray">
                        <tr style="border: 3px solid;">
                            <th class="text-center" style="border: 3px solid;">
                                Date
                            </th>
                            <th style="border: 3px solid;width:100px">

                            </th>
                            <th class="text-center" style="border: 3px solid;">
                                Doc. No
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" style="border: 3px solid;">30-01-23</td>
                            <td class="text-center" style="border: 3px solid;"></td>
                            <td class="text-center" style="border: 3px solid;">A-1236</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- table 02 here -->
            <div class="table-responsive col-md-6" style="margin-bottom:20px;">
                <table class="table table-striped table-bordered" style="border: 3px solid;">
                    <thead style="background:gray">
                        <tr style="border: 3px solid;">
                            <th colspan="2" style="border: 3px solid;">
                                Customer Information
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 3px solid;">Company Name</td>
                            <td style="border: 3px solid;">Interloop</td>
                        </tr>
                        <tr>
                            <td style="border: 3px solid;">POC</td>
                            <td style="border: 3px solid;">Khadija</td>
                        </tr>
                        <tr>
                            <td style="border: 3px solid;">Phone #</td>
                            <td style="border: 3px solid;">0302-8440556</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- table 03 here -->
            <div class="table-responsive col-md-8">
                <table class="table table-striped table-bordered" style="border: 3px solid;">
                    <thead style="background:gray">
                        <tr style="border: 3px solid;">
                            <th style="border: 3px solid;">
                                Course Name
                            </th>
                            <th style="border: 3px solid;">
                                Course Fee
                            </th>
                            <th style="border: 3px solid;">
                                Total Amount
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 3px solid;">Topic: Professional Photographer (Beginner to Pro)</td>
                            <td style="border: 3px solid;">22,000</td>
                            <td style="border: 3px solid;"></td>
                        </tr>
                        <tr>
                            <td style="border: 3px solid;">No of Students:04</td>
                            <td></td>
                            <td style="border: 3px solid;"></td>
                        </tr>
                        <tr>
                            <td style="border: 3px solid;">Zeeshan Akram</td>
                            <td>22,000</td>
                            <td style="border: 3px solid;"></td>
                        </tr>
                        <tr>
                            <td style="border: 3px solid;">M Rizwan</td>
                            <td>22,000</td>
                            <td style="border: 3px solid;"></td>
                        </tr>
                        <tr>
                            <td style="border: 3px solid;">Samiullah</td>
                            <td>22,000</td>
                            <td style="border: 3px solid;"></td>
                        </tr>
                        <tr>
                            <td style="border: 3px solid;">Nasir Hussain</td>
                            <td>22,000</td>
                            <td style="border: 3px solid;"></td>
                        </tr>
                        <tr>
                            <td style="border: 3px solid;">(Mode of Payment: all payment in the name of, PNY Trainings)
                            </td>
                            <td></td>
                            <td style="border: 3px solid;"></td>
                        </tr>
                        <tr>
                            <td style="border: 3px solid;">Amount in Words: Eighty-Eight Thousand Rupee Only
                            </td>
                            <td style="background:gray">Grand Total</td>
                            <td style="border: 3px solid;">88,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- table 04  -->
            <div class="table-responsive col-md-4" style="margin-bottom:30px;">
                <table class="table table-striped table-bordered" style="border: 3px solid;">
                    <thead style="background:gray">
                        <tr style="border: 3px solid;">
                            <th class="text-center" style="border: 3px solid;">
                                Bank Details for Payment & NTN No.:
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                Account Title: PNY Trainings
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                Bank Name: Bank Alfalah
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                Account Number: 10059876543
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                Branch Name: Model Town
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                Branch Branch Code: 0137
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                NTN No.: 7957197-0
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

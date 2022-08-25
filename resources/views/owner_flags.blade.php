<?php
$pagename="owner_flags";
?>
@include('layouts.header')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto ml-2">
        List Of Owners
    </h2>
</div>
<!-- BEGIN: Datatable -->
<div class="intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2  whitespace-no-wrap">
                    Sr.</th>

                <th class="border-b-2  whitespace-no-wrap">
                    Flag Status*</th>

                <th class="border-b-2  whitespace-no-wrap">
                    Time*</th>
                <th class="border-b-2  whitespace-no-wrap">
                    Title*</th>
                <th class="border-b-2  whitespace-no-wrap">
                    User Name*</th>
                <th class="border-b-2  whitespace-no-wrap">
                    User Type*</th>
                <th class="border-b-2  whitespace-no-wrap">
                    Photo ID</th>
                <th class="border-b-2  whitespace-no-wrap">
                    Proof Of Ownership</th>
                <th class="border-b-2  whitespace-no-wrap">
                    Status</th>
                <th class="border-b-2  whitespace-no-wrap">
                    Actions</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td class="border-b w-5"> 1</td>
                <td class="border-b w-5"> Very busy</td>
                <td class="border-b w-5"> 03:45 PM</td>
                <td class="border-b w-5"> Johar Town lahore Pakistan</td>
                <td class="border-b w-5"> Abdul Manan</td>
                <td class="border-b w-5"> Owner</td>
                <td>
                    <img src="{{asset('assets/dist/logo.png')}}" width="50"
                        height="50">
                </td>
                <td>
                    <img src="{{asset('assets/dist/logo.png')}}" width="50"
                        height="50">
                </td>
                <td>
                    <select name="status" class=" border-0 " id="" class="category" aria-label value="">
                        <option value="0" name="status_value">Pending</option>

                        <option value="1">Approved</option>

                        <option value="2">Cancel</option>
                    </select>
                </td>
                <td>
                    <button style="border:none;" type="button" value="" class="deletebtn btn"><a
                            class=" flex items-center text-theme-6" href="javascript:;" data-toggle="modal"
                            data-target="#delete-modal-preview"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>
                            Delete </a>
                    </button>
                </td>
            </tr>

        </tbody>
    </table>
</div>
<!-- END: Datatable -->
<div class="modal" id="delete-modal-preview">
    <div class="modal__content">
        <div class="p-5 text-center">
            <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
            <div class="text-3xl mt-5">Are you sure?</div>
            <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be
                undone.
            </div>
        </div>
        <div class="px-5 pb-8 text-center">
            <form type="submit" action="" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="delete_user_id" id="deleting_id"></input>
                <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                <button type="submit" class="button w-24 bg-theme-6 text-white p-3 pl-5 pr-5">Delete</button>
            </form>
        </div>
    </div>
</div>
<!-- END: Datatable -->
</div>
@include('layouts.footer')
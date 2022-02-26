@extends('layouts.owner')

@section('content')
<x-owner-sidebar>
    <div class="overflow-x-auto w-full">
        <table class="table w-full">
            <!-- head -->
            <thead>
            <tr>
                <th>
                <label>
                    <input type="checkbox" class="checkbox">
                </label>
                </th>
                <th>Image</th>
                <th>Date</th>
                <th>User Id</th>
                <th>Property Id</th>
                <th>Full Name</th>
                <th>Status</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
            </tr>
            </thead>
            <tbody>
            <!-- row 1 -->
            <tr>
                <th>
                <label>
                    <input type="checkbox" class="checkbox">
                </label>
                </th>
                <td>
                <div class="flex items-center space-x-3">
                    <div class="avatar">
                    <div class="w-16 h-16">
                        <img src="" alt="Receipt Image">
                    </div>
                    </div>
                    <div>
                  
                </div>
                </td>
                <td>01/12/2012</td>
                <td>Purple</td>
                <td>
                Zemlak, Daniel and Leannon
                <br>
                <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
                </td>
            </tr>
            <!-- row 2 -->
            <tr>
                <th>
                <label>
                    <input type="checkbox" class="checkbox">
                </label>
                </th>
                <td>
                <div class="flex items-center space-x-3">
                    <div class="avatar">
                    <div class="w-12 h-12 mask mask-squircle">
                        <img src="/tailwind-css-component-profile-3@56w.png" alt="Avatar Tailwind CSS Component">
                    </div>
                    </div>
                </div>
                </td>
                <td>
                Carroll Group
                <br>
                <span class="badge badge-ghost badge-sm">Tax Accountant</span>
                </td>
                <td>Red</td>
                <th>
                <button class="btn btn-ghost btn-xs">details</button>
                </th>
            </tr>
            <!-- row 3 -->
            <tr>
                <th>
                <label>
                    <input type="checkbox" class="checkbox">
                </label>
                </th>
                <td>
                <div class="flex items-center space-x-3">
                    <div class="avatar">
                    <div class="w-12 h-12 mask mask-squircle">
                        <img src="/tailwind-css-component-profile-4@56w.png" alt="Avatar Tailwind CSS Component">
                    </div>
                    </div>
                </div>
                </td>
                <td>
                Rowe-Schoen
                <br>
                <span class="badge badge-ghost badge-sm">Office Assistant I</span>
                </td>
                <td>Crimson</td>
                <th>
                <button class="btn btn-ghost btn-xs">details</button>
                </th>
            </tr>
            <!-- row 4 -->
            <tr>
                <th>
                <label>
                    <input type="checkbox" class="checkbox">
                </label>
                </th>
                <td>
                <div class="flex items-center space-x-3">
                    <div class="avatar">
                    <div class="w-12 h-12 mask mask-squircle">
                        <img src="/tailwind-css-component-profile-5@56w.png" alt="Avatar Tailwind CSS Component">
                    </div>
                    </div>
                </div>
                </td>
                <td>
                Wyman-Ledner
                <br>
                <span class="badge badge-ghost badge-sm">Community Outreach Specialist</span>
                </td>
                <td>Indigo</td>
                <th>
                <button class="btn btn-ghost btn-xs">details</button>
                </th>
            </tr>
            </tbody>
            <!-- foot -->
            <tfoot>
            </tfoot>
        </table>
    </div>
</x-owner-sidebar>
@endsection      
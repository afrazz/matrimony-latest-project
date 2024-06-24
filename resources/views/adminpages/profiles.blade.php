@extends('layouts.app')
 
@section('title', 'Laravel 10 Login SignUp with User Roles and Permissions with Admin CRUD | Tailwind CSS Custom Login register')
 
@section('contents')
<div>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Full Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Height</th>
                <th>Religion</th>
                <th>City</th>
                <th>Mobile Number</th>
                <th>Education</th>
                <th>Occupation</th>
                <th>Annual Income</th>
                <th>Actions</th>
                <th>Assign Profile</th>
                {{-- <th>Profile Picture</th> --}}
            </tr>
        </thead>
        <tbody>
            <!-- Example row start -->
            @foreach($users as $users)
            <tr>
                <td>{{$users->id}}</td>
                <td>{{$users->fullname}}</td>
                <td>{{$users->gender}}</td>
                <td>{{$users->date_of_birth}}</td>
                <td>{{$users->height}}</td>
                <td>{{$users->religion}}</td>
                <td>{{$users->city}}</td>
                <td>{{$users->mobile_number}}</td>
                <td>{{$users->education}}</td>
                <td>{{$users->occupation}}</td>
                <td>{{$users->annual_income}}</td>
                <td class="w-36">
                    <div class="h-14 pt-5">
                        <a href="{{ route('admin.editprofiles', $users->id) }}" class="text-green-800 pl-2">Edit</a> |
                    </div>
                </td>
                <td class="w-36">
                    <div class="h-14 pt-5">
                        <a href="{{ route('admin.showAssignViewPermissionsForm',$users->user_id ) }}" class="text-green-800 pl-2">Assign</a> |
                    </div>
                </td>
            </tr>
            @endforeach
            <!-- Example row end -->
            <!-- Additional rows can be added here -->
        </tbody>
    </table>
</div>
@endsection
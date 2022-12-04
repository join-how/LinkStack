@extends('layouts.sidebar')

@section('content')

<style>.delete{color:transparent; background-color:tomato; border-radius:5px; padding:8px 12px; cursor: pointer;}.delete:hover{color:transparent;background-color:#f13d1d;}html,body{max-width:100%;overflow-x:hidden;}</style>

<style>*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.shadow-z-1{-webkit-box-shadow:0 1px 3px 0 rgba(0,0,0,0.12),0 1px 2px 0 rgba(0,0,0,0.24);-moz-box-shadow:0 1px 3px 0 rgba(0,0,0,0.12),0 1px 2px 0 rgba(0,0,0,0.24);box-shadow:0 1px 3px 0 rgba(0,0,0,0.12),0 1px 2px 0 rgba(0,0,0,0.24)}.table{width:100%;max-width:100%;margin-bottom:2rem;background-color:transparent}.table > thead > tr,.table > tbody > tr,.table > tfoot > tr{-webkit-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease}.table > thead > tr > th,.table > tbody > tr > th,.table > tfoot > tr > th,.table > thead > tr > td,.table > tbody > tr > td,.table > tfoot > tr > td{text-align:left;padding:1.6rem;vertical-align:top;border-top:0;-webkit-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease}.table > thead > tr > th{font-weight:400;color:#757575;vertical-align:bottom;border-bottom:1px solid rgba(0,0,0,0.12)}.table > caption + thead > tr:first-child > th,.table > colgroup + thead > tr:first-child > th,.table > thead:first-child > tr:first-child > th,.table > caption + thead > tr:first-child > td,.table > colgroup + thead > tr:first-child > td,.table > thead:first-child > tr:first-child > td{border-top:0}.table > tbody + tbody{border-top:1px solid rgba(0,0,0,0.12)}.table .table{background-color:transparent}.table .no-border{border:0}.table-condensed > thead > tr > th,.table-condensed > tbody > tr > th,.table-condensed > tfoot > tr > th,.table-condensed > thead > tr > td,.table-condensed > tbody > tr > td,.table-condensed > tfoot > tr > td{padding:.8rem}.table-bordered{border:0}.table-bordered > thead > tr > th,.table-bordered > tbody > tr > th,.table-bordered > tfoot > tr > th,.table-bordered > thead > tr > td,.table-bordered > tbody > tr > td,.table-bordered > tfoot > tr > td{border:0;border-bottom:1px solid #e0e0e0}.table-bordered > thead > tr > th,.table-bordered > thead > tr > td{border-bottom-width:2px}.table-striped > tbody > tr:nth-child(odd) > td,.table-striped > tbody > tr:nth-child(odd) > th{background-color:#f5f5f5}.table-hover > tbody > tr:hover > td,.table-hover > tbody > tr:hover > th{background-color:rgba(0,0,0,0.12)}@media screen and (max-width: 768px){.table-responsive-vertical > .table{margin-bottom:0;background-color:transparent}.table-responsive-vertical > .table > thead,.table-responsive-vertical > .table > tfoot{display:none}.table-responsive-vertical > .table > tbody{display:block}.table-responsive-vertical > .table > tbody > tr{display:block;border:1px solid #e0e0e0;border-radius:2px;margin-bottom:1.6rem}.table-responsive-vertical > .table > tbody > tr > td{background-color:transparent;display:block;vertical-align:middle;text-align:right}.table-responsive-vertical > .table > tbody > tr > td[data-title]:before{content:attr(data-title);float:left;font-size:inherit;font-weight:400;color:#757575}.table-responsive-vertical.shadow-z-1{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}.table-responsive-vertical.shadow-z-1 > .table > tbody > tr{border:none;-webkit-box-shadow:0 1px 3px 0 rgba(0,0,0,0.12),0 1px 2px 0 rgba(0,0,0,0.24);-moz-box-shadow:0 1px 3px 0 rgba(0,0,0,0.12),0 1px 2px 0 rgba(0,0,0,0.24);box-shadow:0 1px 3px 0 rgba(0,0,0,0.12),0 1px 2px 0 rgba(0,0,0,0.24)}.table-responsive-vertical > .table-bordered{border:0}.table-responsive-vertical > .table-bordered > tbody > tr > td{border:0;border-bottom:1px solid #e0e0e0}.table-responsive-vertical > .table-bordered > tbody > tr > td:last-child{border-bottom:0}.table-responsive-vertical > .table-striped > tbody > tr > td,.table-responsive-vertical > .table-striped > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical > .table-striped > tbody > tr > td:nth-child(odd){background-color:#f5f5f5}.table-responsive-vertical > .table-hover > tbody > tr:hover > td,.table-responsive-vertical > .table-hover > tbody > tr:hover{background-color:transparent}.table-responsive-vertical > .table-hover > tbody > tr > td:hover{background-color:rgba(0,0,0,0.12)}}.table-striped.table-mc-red > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-red > tbody > tr:nth-child(odd) > th{background-color:#fde0dc}.table-hover.table-mc-red > tbody > tr:hover > td,.table-hover.table-mc-red > tbody > tr:hover > th{background-color:#f9bdbb}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-red > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-red > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-red > tbody > tr > td:nth-child(odd){background-color:#fde0dc}.table-responsive-vertical .table-hover.table-mc-red > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-red > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-red > tbody > tr > td:hover{background-color:#f9bdbb}}.table-striped.table-mc-pink > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-pink > tbody > tr:nth-child(odd) > th{background-color:#fce4ec}.table-hover.table-mc-pink > tbody > tr:hover > td,.table-hover.table-mc-pink > tbody > tr:hover > th{background-color:#f8bbd0}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-pink > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-pink > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-pink > tbody > tr > td:nth-child(odd){background-color:#fce4ec}.table-responsive-vertical .table-hover.table-mc-pink > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-pink > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-pink > tbody > tr > td:hover{background-color:#f8bbd0}}.table-striped.table-mc-purple > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-purple > tbody > tr:nth-child(odd) > th{background-color:#f3e5f5}.table-hover.table-mc-purple > tbody > tr:hover > td,.table-hover.table-mc-purple > tbody > tr:hover > th{background-color:#e1bee7}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-purple > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-purple > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-purple > tbody > tr > td:nth-child(odd){background-color:#f3e5f5}.table-responsive-vertical .table-hover.table-mc-purple > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-purple > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-purple > tbody > tr > td:hover{background-color:#e1bee7}}.table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) > th{background-color:#ede7f6}.table-hover.table-mc-deep-purple > tbody > tr:hover > td,.table-hover.table-mc-deep-purple > tbody > tr:hover > th{background-color:#d1c4e9}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr > td:nth-child(odd){background-color:#ede7f6}.table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr > td:hover{background-color:#d1c4e9}}.table-striped.table-mc-indigo > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-indigo > tbody > tr:nth-child(odd) > th{background-color:#e8eaf6}.table-hover.table-mc-indigo > tbody > tr:hover > td,.table-hover.table-mc-indigo > tbody > tr:hover > th{background-color:#c5cae9}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr > td:nth-child(odd){background-color:#e8eaf6}.table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr > td:hover{background-color:#c5cae9}}.table-striped.table-mc-blue > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-blue > tbody > tr:nth-child(odd) > th{background-color:#e7e9fd}.table-hover.table-mc-blue > tbody > tr:hover > td,.table-hover.table-mc-blue > tbody > tr:hover > th{background-color:#d0d9ff}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-blue > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-blue > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-blue > tbody > tr > td:nth-child(odd){background-color:#e7e9fd}.table-responsive-vertical .table-hover.table-mc-blue > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-blue > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-blue > tbody > tr > td:hover{background-color:#d0d9ff}}.table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) > th{background-color:#e1f5fe}.table-hover.table-mc-light-blue > tbody > tr:hover > td,.table-hover.table-mc-light-blue > tbody > tr:hover > th{background-color:#b3e5fc}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr > td:nth-child(odd){background-color:#e1f5fe}.table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr > td:hover{background-color:#b3e5fc}}.table-striped.table-mc-cyan > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-cyan > tbody > tr:nth-child(odd) > th{background-color:#e0f7fa}.table-hover.table-mc-cyan > tbody > tr:hover > td,.table-hover.table-mc-cyan > tbody > tr:hover > th{background-color:#b2ebf2}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr > td:nth-child(odd){background-color:#e0f7fa}.table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr > td:hover{background-color:#b2ebf2}}.table-striped.table-mc-teal > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-teal > tbody > tr:nth-child(odd) > th{background-color:#e0f2f1}.table-hover.table-mc-teal > tbody > tr:hover > td,.table-hover.table-mc-teal > tbody > tr:hover > th{background-color:#b2dfdb}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-teal > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-teal > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-teal > tbody > tr > td:nth-child(odd){background-color:#e0f2f1}.table-responsive-vertical .table-hover.table-mc-teal > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-teal > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-teal > tbody > tr > td:hover{background-color:#b2dfdb}}.table-striped.table-mc-green > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-green > tbody > tr:nth-child(odd) > th{background-color:#d0f8ce}.table-hover.table-mc-green > tbody > tr:hover > td,.table-hover.table-mc-green > tbody > tr:hover > th{background-color:#a3e9a4}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-green > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-green > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-green > tbody > tr > td:nth-child(odd){background-color:#d0f8ce}.table-responsive-vertical .table-hover.table-mc-green > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-green > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-green > tbody > tr > td:hover{background-color:#a3e9a4}}.table-striped.table-mc-light-green > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-light-green > tbody > tr:nth-child(odd) > th{background-color:#f1f8e9}.table-hover.table-mc-light-green > tbody > tr:hover > td,.table-hover.table-mc-light-green > tbody > tr:hover > th{background-color:#dcedc8}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr > td:nth-child(odd){background-color:#f1f8e9}.table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr > td:hover{background-color:#dcedc8}}.table-striped.table-mc-lime > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-lime > tbody > tr:nth-child(odd) > th{background-color:#f9fbe7}.table-hover.table-mc-lime > tbody > tr:hover > td,.table-hover.table-mc-lime > tbody > tr:hover > th{background-color:#f0f4c3}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-lime > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-lime > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-lime > tbody > tr > td:nth-child(odd){background-color:#f9fbe7}.table-responsive-vertical .table-hover.table-mc-lime > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-lime > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-lime > tbody > tr > td:hover{background-color:#f0f4c3}}.table-striped.table-mc-yellow > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-yellow > tbody > tr:nth-child(odd) > th{background-color:transparentde7}.table-hover.table-mc-yellow > tbody > tr:hover > td,.table-hover.table-mc-yellow > tbody > tr:hover > th{background-color:transparent9c4}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr > td:nth-child(odd){background-color:transparentde7}.table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr > td:hover{background-color:transparent9c4}}.table-striped.table-mc-amber > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-amber > tbody > tr:nth-child(odd) > th{background-color:transparent8e1}.table-hover.table-mc-amber > tbody > tr:hover > td,.table-hover.table-mc-amber > tbody > tr:hover > th{background-color:#ffecb3}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-amber > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-amber > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-amber > tbody > tr > td:nth-child(odd){background-color:transparent8e1}.table-responsive-vertical .table-hover.table-mc-amber > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-amber > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-amber > tbody > tr > td:hover{background-color:#ffecb3}}.table-striped.table-mc-orange > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-orange > tbody > tr:nth-child(odd) > th{background-color:transparent3e0}.table-hover.table-mc-orange > tbody > tr:hover > td,.table-hover.table-mc-orange > tbody > tr:hover > th{background-color:#ffe0b2}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-orange > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-orange > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-orange > tbody > tr > td:nth-child(odd){background-color:transparent3e0}.table-responsive-vertical .table-hover.table-mc-orange > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-orange > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-orange > tbody > tr > td:hover{background-color:#ffe0b2}}.table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) > th{background-color:#fbe9e7}.table-hover.table-mc-deep-orange > tbody > tr:hover > td,.table-hover.table-mc-deep-orange > tbody > tr:hover > th{background-color:#ffccbc}@media screen and (max-width: 767px){.table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd){background-color:transparent}.table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr > td:nth-child(odd){background-color:#fbe9e7}.table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr:hover{background-color:transparent}.table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr > td:hover{background-color:#ffccbc}}</style>

<section class="shadow text-gray-400">
        <h2 class="mb-4 card-header"><i class="bi bi-person"> Users</i></h2>
        <div style="overflow-x:scroll;" class="card-body p-0 p-md-3">

        <form action="{{ route('searchUser') }}" method="post">
        @csrf
          <div class="form-group col-lg-8 mb-5">
            <input type="text" name="name" placeholder="search user">
            <button type="submit" class="btn-primary"><i class="bi bi-search"></i></button>
          </div>
        </form>
        Users: 
        <a href="{{ url('') }}/panel/users/all">All</a> - 
        <a href="{{ url('') }}/panel/users/user">User</a> - 
        <a href="{{ url('') }}/panel/users/vip">Vip</a> - 
        <a href="{{ url('') }}/panel/users/admin">Admin</a> 

        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">E-Mail</th>
              <th scope="col">Page</th>
              <th scope="col">Role</th>
              <th scope="col">Edit</th>
              <th scope="col">Links</th>
              @if(env('REGISTER_AUTH') !== 'auth')<th style="width:15%" scope="col">E-Mail Verified</th>@endif
              <th scope="col">Block</th>
              <th scope="col" style="width:150px">Delete user</th>
            </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
            <tr>
              <td> {{ $user->name }} </td>
              <td> {{ $user->email }} </td>
              <td><a href="{{ url('') }}/@<?= $user->littlelink_name ?>" target="_blank" class="text-info"><i class="bi bi-box-arrow-up-right"></i>&nbsp; {{ $user->littlelink_name }} </a></td>
              <td>{{ $user->role }}</td>
              <td><a href="{{ route('editUser', $user->id ) }}">Edit</a></td>
              <td><a href="{{ route('showLinksUser', $user->id ) }}" class="text-primary">View</a></td>
              @if(env('REGISTER_AUTH') !== 'auth')
              <td>@if($user->find($user->id)->role == 'admin' and $user->email_verified_at != '')yes @else
              <a href="{{ route('verifyUser', ['verify' => '-' . $user->email_verified_at, 'id' => $user->id] ) }}" class="text-danger">@if($user->email_verified_at == '')<span>no</span>@else<span style="color:#228B22">yes</span></a>@endif</td>
              @endif
              @endif
              <td>@if($user->find($user->id)->role == 'admin')-@else<a href="{{ route('blockUser', ['block' => $user->block, 'id' => $user->id] ) }}" class="text-danger">{{ $user->block }}</a>@endif</td>
              <td>@if($user->find($user->id)->role == 'admin')<center>-</center>@else<center><a href="{{ route('deleteUser', ['id' => $user->id] ) }}" class="confirmation delete"><i style="color: #fff !important" class="bi bi-trash-fill"></i><span class="hide-mobile-del"></span></a></center>@endif</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{ url('') }}/panel/new-user">+ Add new user</a>

              <script type="text/javascript">
                var elems = document.getElementsByClassName('confirmation');
                var confirmIt = function (e) {
                    if (!confirm('Are you sure you want to delete this user? \nThis action cannot be undone!')) e.preventDefault();
                };
                for (var i = 0, l = elems.length; i < l; i++) {
                    elems[i].addEventListener('click', confirmIt, false);
                }
              </script>

          </div>
</section>

@endsection

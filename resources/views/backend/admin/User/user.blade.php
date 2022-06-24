@extends('backend.admin.layout.master')
@section('content')
 <!-- content -->

   <!--Add Modal -->
   @foreach ($usertype as $key => $usert)
   <div class="modal fade" id="exampleModal{{ @$usert->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('user.usertype.update',$usert->id) }}" method="POST">
            @csrf
        <div class="modal-body">
          <span>{{$usert->id}}/{{$usert->name}}</span>
            <select class="form-select" name="user_type" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="super_admin">Super-admin</option>
                <option value="admin">Admin</option>
                <option value="moderator">Moderator</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary add_info">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  @endforeach
  {{-- End modal --}}
 <div class="content ">

    <div class="table-responsive">
        <table class="table data-table table table-custom table-lg">
            <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>User-Type</th>
                <th>Admin-Role</th>
                <th>Status</th>
                <th class="text-end">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($userdata as $key => $user)
            <tr>
                <td>{{$key+1}}</td>
                <td>
                    <a href="#">
                        <figure class="avatar me-3">
                            <img src="{{asset('fontend/main/assets/images/user/man_avatar3.jpg')}}"
                                    class="rounded-circle" alt="avatar">
                        </figure>
                        {{$user->name}}
                    </a>
                </td>
                <td>{{$user->email}}</td>
                <td>{{$user->user_type}}</td>
                <td>Syria</td>
                <td>
                    @if($user->user_type == 'super_admin')
                        <span class="badge bg-success">Active</span>
                    @elseif($user->user_type == 'admin')
                        <span class="badge bg-warning">Active</span>
                    @elseif($user->user_type == 'moderator')
                    <span class="badge bg-primary">Active</span>
                    @else
                    <span class="badge bg-primary">Blocked</span>
                    <a style="font-size: 2.73em;" data-bs-toggle="modal" data-bs-target="#exampleModal{{ @$user->id }}"><i class="bi bi-plus"></i></a>
                    @endif
                </td>
                <td class="text-end">
                    <div class="dropdown">
                        <a href="#" data-bs-toggle="dropdown"
                           class="btn btn-floating"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-three-dots"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">View Profile</a>
                            <a href="#" class="dropdown-item">Edit</a>
                            <a href="#" class="dropdown-item text-danger">Delete</a>
                        </div>
                    </div>
                </td>
            </tr> 
            @endforeach
            </tbody>
        </table>
    </div>

    <nav class="mt-4" aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>

    </div>
    <!-- ./ content -->
@endsection
@extends('layouts.qoshomeapp')

@section('content')
  <div class="content-wrapper" style="margin-top:13px;">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
              User Management
            </h1>
          </section>
          <section class="content">
      <form method="POST" action="{{ route('administrator') }}">
        @csrf @method('PATCH')
        <table>
          <tr style="background-color:#222d32; color:white;">
            <th style="border: 1px solid black;padding: 8px;">Name</th>
            <th style="border: 1px solid black;padding: 8px;">FTID</th>
            <th style="border: 1px solid black;padding: 8px;">Email</th>
            <th style="border: 1px solid black;padding: 8px;">Role</th>
            <th style="border: 1px solid black;padding: 8px;">Status</th>
          </tr>
          @foreach($allusers as $users)
          <tr>
            <td style="border: 1px solid black;padding: 8px;">{{$users->name}}</td>
            <td style="border: 1px solid black;padding: 8px;">{{$users->ftid}}</td>
            <td style="border: 1px solid black;padding: 8px;">
              <input type="hidden" name="email[]" value="{{$users->email}}" required>{{$users->email}}</td>
            <td style="border: 1px solid black;padding: 8px;">
              <select type="text" name="role_id[]" selected="{{ $users->role_id }}" required>
                      <option value="1" <?php echo $users->role_id == '1' ? 'selected' : '' ?> >Admin</option>
                      <option value="2" <?php echo $users->role_id == '2' ? 'selected' : '' ?> >User</option>
                      <option value="3" <?php echo $users->role_id == '3' ? 'selected' : '' ?> >3</option>
                      <option value="4" <?php echo $users->role_id == '4' ? 'selected' : '' ?> >4</option>
                      <option value="5" <?php echo $users->role_id == '5' ? 'selected' : '' ?> >5</option>
                      <option value="6" <?php echo $users->role_id == '6' ? 'selected' : '' ?> >6</option>
                      <option value="7" <?php echo $users->role_id == '7' ? 'selected' : '' ?> >7</option>
                    </select>
            </td>
            <td style="border: 1px solid black;padding: 8px;">
              <select type="text" name="status[]" selected="{{ $users->status }}" required>
                      <option value="0" <?php echo $users->status == '0' ? 'selected' : '' ?> >Inactive</option>
                      <option value="1" <?php echo $users->status == '1' ? 'selected' : '' ?> >Active</option>
                    </select>
            </td>
          </tr>
          @endforeach
        </table>
        <div class="btn btn-sm btn-flat" style="margin-top:15px;">
        <button type="submit" class="btn" style="background-color: #222d32;color:white;">Save Changes</button>
        </div>
      </form>
      <div class="btn btn-sm btn-flat" style="margin-top:15px;height: 75px;">
      <form method="POST" action="{{ route('ldapupdate') }}">
        @csrf
        <button type="submit" class="btn" style="background-color: #222d32;color:white;">Update all users from Active Directory</button>
      </form>
      </div>
    </section>
  </div>
@endsection
@if (count($users) > 0)
  @foreach ($users as $user)
    <div class="col-md-4 mt-5">
      <div class="card" style="width: 25rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $user->name }}</h5>
          <h6 class="card-subtitle mb-2 department">{{ $user->department->name }} </h6>
          <p class="card-text designation">{{ $user->designation->name }}</p>
        </div>
      </div>
    </div>
  @endforeach
@else
  <p>No users found.</p>
@endif
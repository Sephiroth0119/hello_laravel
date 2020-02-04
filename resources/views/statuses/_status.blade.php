<li class="media mt-4 mb-4">
  <a href="{{ route('users.show',$user->id) }}">
  <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="mr-3 gravatar">
  </a>
  <div class="media-body">
  <h5 class="mt-0 mb-1">{{ $user->name }}
    {{-- $status 代表单跳微博数据 $user代表该条微博发布者 --}}
  <small>/ {{ $status->created_at->diffForHumans() }}</small></h5>
  {{ $status->content }}
  </div>
</li>

<div wire:poll>
    <a href="{{ route('revisor.index') }}" class="nav-link" style="color:var(--third-color); list-style: none; cursor: pointer">
        {{ __('ui.navRevisor') }}
            @if (App\Models\announcement::toBeRevisionedCount() > 0)
                    <span
                        class="badge badge-danger text-danger">{{ App\Models\announcement::toBeRevisionedCount() }}
                        unread messages </span>
            @elseif (App\Models\announcement::toBeRevisionedCount() < 0)
                    <span
                        class="badge badge-danger text-danger">{{ App\Models\announcement::toBeRevisionedCount() }}
                        unread messages </span>
                </span>
            @endif
        </a>
</div>

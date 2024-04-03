<form action="{{ route('set_language_locale', ['lang' => $lang1]) }}" method="POST">
    @csrf
    <button type="submit" class="nav-link" style="background-color:transparent; border:none;">
         {{$slot}}
    </button>
</form>
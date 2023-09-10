@if(str_contains(Request::route()->getName(), strtolower($slot)))
    <a {{$attributes}} class="py-2 font-light hover:bg-custom-blue-medium p-5 md:px-10 bg-custom-blue-medium">{{$slot}}</a>
@else
    <a {{$attributes}} class="py-2 font-light p-5 md:px-10 hover:bg-custom-blue-medium transition duration-250 ease-in">{{$slot}}</a>
@endif

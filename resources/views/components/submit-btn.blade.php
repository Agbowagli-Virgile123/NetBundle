@props([
    'className' => '',
    'iconClass' => '',
    'btnText' => '',
    'form' => ''
])


<button type="submit" form="{{$form}}" class="btn {{$className}}">
    <span id="btnText">
        <i class="bi bi-{{$iconClass}}"></i>{{$btnText}}
    </span>
    <span
        id="spinner"
        class="spinner-border spinner-border-sm d-none"
        role="status"
        aria-hidden="true"
    ></span>
</button>

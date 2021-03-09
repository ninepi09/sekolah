@if ($absensis)
@php
    $status = $absensis->where('status', $status)->count();
    $total = $absensis->count();
@endphp
    {{ $status }}&nbsp;
    <span class="text-danger">{{ doubleval($status * 100 / $total) }}%</span>
@endif

@php
    // $vote non è un numero va convertito
    $votestring = trim($vote);
    $votecasted = floatval($votestring);

    // calcolo stelle piene, floor arrotonda per difetto
    $solidstar = floor($votecasted);

    if ($votecasted - $solidstar >= 0.5) {
        $halfstar = 1;
    } else {
        $halfstar = 0;
    }
    $emptystar = 10 - $solidstar - $halfstar;
@endphp

<div class="card h-100">
    <div class="card-body">
        <h4>{{ $title }}</h4>
        <h5 class="text-muted">{{ $original_title }}</h5>
        <div class="pb-3 pt-1">{{ $nationality }}</div>
        <div class="py-2"> {{ $date }}</div>
    </div>
    <div class="card-footer bg-primary-subtle">
        <div>
            @for ($i = 0; $i < $solidstar; $i++)
                <i class="fa-solid fa-star text-primary"></i>
            @endfor
            @for ($i = 0; $i < $halfstar; $i++)
                <i class="fa-regular fa-star-half-stroke text-primary"></i>
            @endfor
            @for ($i = 0; $i < $emptystar; $i++)
                <i class="fa-regular fa-star text-primary"></i>
            @endfor

            <span class="text-primary px-2"> ({{ $vote }}) </span>
        </div>
    </div>
</div>

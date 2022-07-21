@if (isset($hostel->img1) || isset($hostel->img2) || isset($hostel->img3) || isset($hostel->img4) || isset($hostel->img5) )
        @php
            $count = 0;
        @endphp
        @for ($i = 1; $i<6; $i++)
            @if (isset($hostel->img{{ $i }}))
                @php
                    $count++;
                @endphp
            @endif
        @endfor
@endif
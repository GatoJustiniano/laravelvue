@extends('dashboard.master', ['activePage' => ''])
@section('title', 'Game')

@push('styles')
<style type="text/css">
    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    .refresh {
        animation: rotate 1.5s linear infinite;
    }
</style>
@endpush

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div
                    class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                    <h5 class="card-title mb-sm-0 me-2">Sistema de Juego en caliente</h5>
                    <div class="action-btns">
                        <a class="btn btn-label-info me-3" href="{{ URL::previous() }}">
                            Retroceder
                        </a>
                        <button class="btn btn-label-success " href="#">
                            Reiniciar
                        </button>                        
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img id="circle" class="" width="250" height="250" src="{{ asset('img/circle.png') }}">

                        <p id="winner" class="display-1 d-none text-primary">10</p>
                    </div>
                    <hr>

                    <div class="text-center">
                        <label class="font-weight-bold h5">Your bet</label>
                        <select id="bet" class="custom-select col-auto">
                            <option selected>Not in</option>

                            @foreach(range(1, 12) as $number)
                                <option>{{ $number }}</option>
                            @endforeach
                        </select>
                        <hr>
                        <p class="font-weight-bold h5">Remaining Time</p>
                        <p id="timer" class="h5 text-danger">Waiting to start</p>
                        <hr>
                        <p id="result" class="h1"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    const circleElement = document.getElementById('circle');
    const timerElement = document.getElementById('timer');
    const winnerElement = document.getElementById('winner');
    const betElement = document.getElementById('bet');
    const resultElement = document.getElementById('result');

    Echo.channel('game')
        .listen('RemainingTimeChanged', (e) => {
            timerElement.innerText = e.time;

            circleElement.classList.add('refresh');

            winnerElement.classList.add('d-none');

            resultElement.innerText = '';
            resultElement.classList.remove('text-success');
            resultElement.classList.remove('text-danger');
        })
        .listen('WinnerNumberGenerated', (e) => {
            circleElement.classList.remove('refresh');

            let winner = e.number;
            winnerElement.innerText = winner;
            winnerElement.classList.remove('d-none');

            let bet = betElement[betElement.selectedIndex].innerText;

            if (bet == winner) {
                resultElement.innerText = 'You WIN';
                resultElement.classList.add('text-success');
            } else {
                resultElement.innerText = 'You LOSE';
                resultElement.classList.add('text-danger');
            }
        });
</script>
@endpush
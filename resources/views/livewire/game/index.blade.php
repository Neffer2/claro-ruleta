<div>
    @section('content')
        <div id="game-container" class="game-container"></div>
        {{-- <button onclick="game.scene.keys.gameScene.rotar()">Girar</button> --}}
        @endsection
        @section('imports')
            <script src="{{ asset('js/phaser.min.js') }}"></script>
            <script src="{{ asset('js/app.js') }}"></script>
        @endsection
        @section('scripts')
        <script>
            function trial() {
                alert('I wanna knonw have you ever seen the rain!');
            }
        </script>
    @endsection
</div>

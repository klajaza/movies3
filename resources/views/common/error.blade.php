@if (count($errors) > 0)

    <div class = "alert alert-danger">
        <strong>Došlo je do progreške kod unosa</strong><br><br>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        
    </div>

@endif
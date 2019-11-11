@extends('header',['title' => 'Inscrition'],['bt1' => 'Home'],['bt1' => 'test'])

@section('contenu')
<form action="./home" method="post">
    {{ csrf_field() }}

    <input type="email" name="email" placeholder="Email"><br/>
    <input type="password" name="password" placeholder="Mot de passe"><br/>
    <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"><br/>
    <input type="submit" name='valider' value="M'inscrire">

</form>
</body>
@endsection
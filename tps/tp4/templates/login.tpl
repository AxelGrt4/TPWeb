{extends file='layout.tpl'}
{block name=title}Login{/block}
{block name=body}
<div id='main'>
<h1>Login</h1>
<p>
Contenu du template login.tpl
</p>
</div>
<form action="login" method="post">
<div>
        <br>
        <label for="Email"> Votre Email : </label>
        <br>
        <input type="email" name="Email" value='{$data.Email|escape|default:''}'>
        {$messages.Email|default:''}
    </div>

    <div>
        <br>
        <label for="Motdepasse"> Mot de Passe : </label>
        <br>
        <input type="password" name="Motdepasse">
        {$messages.Motdepasse|default:''}
    </div>

    <div>
    <br>
    <input type="submit" value="Se connecter">
    </div>
</form>
{/block}
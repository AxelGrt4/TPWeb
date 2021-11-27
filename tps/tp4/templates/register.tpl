{extends file='layout.tpl'}
{block name=title}Register{/block}
{block name=body}
<h1>Register</h1>
<div id='main'>
<p> 
<form action="register" method="post">
    <div>
        <label for="Nom"> Votre nom : </label>
        <br>
        <input type="text" name="Nom" value='{$data.Nom|escape|default:''}'>
        {$messages.Nom|default:''}
    </div>

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
    <label for="Pays"> Votre Pays : </label>
    <br>
    <input type="text" name="Pays" value='{$data.Pays|escape|default:''}'>
    {$messages.Pays|default:''}
    </div>
    
    <div>
    <br>
    <label for="Ville"> Votre Ville : </label>
    <br>
    <input type="text" name ="Ville" value='{$data.Ville|escape|default:''}'>
    {$messages.Ville|default:''}
    </div>

    <div>
    <br>
    <input type="submit" value="S'inscrire">
    </div>

</form>
</div>
{/block}
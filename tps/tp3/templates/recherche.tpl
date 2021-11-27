<!doctype html>
<html>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$titre}</title>
 </head>
 <body>
    <h1>{$titre}</h1>
    
    <table>
        <tr>
            <th> Artiste </th>
            <th> Album </th>
        </tr>
        {foreach from=$donnees item=$album}
        <tr>
            <td> <a href="./artiste-{$album[5]}-{$album[2]}.html">{$album[2]}</a></td>
            <td> {$album[1]}</td>
        </tr>
        {foreachelse}
        <p>La recherche n'a rien donner</p>
        {/foreach}
    </table>
 </body>
</html>
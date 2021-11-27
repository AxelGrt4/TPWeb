<!doctype html>
<html>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$titre}</title>
 </head>
 <body>
    <h1>{$titre}</h1>
    <p>{$route}</p>
    <table>
        <tr>
            <th> Artiste </th>
            <th> Album </th>
            <th> Genre </th>
            <th> Date </th>
        </tr>
        {foreach from=$donnees
                 item=$album }
        <tr>
            <td><a href="./artiste-{$album[5]}-{$album[2]}.html">{$album[2]}</a></td>
            <td>{$album[1]}</td>
            <td>{$album[3]}</td>
            <td>{$album[4]}</td>
        </tr>
        {/foreach}
    </table>
 </body>
</html>
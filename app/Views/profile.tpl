{if isset($smarty.session.pseudo) && isset($smarty.session.id) }
{extends file='base/layout.tpl'}
{block name=content}
    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4">
            <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="{base_url('assets/Images/profile')|cat:'/'|cat:$photo_profile}" height="100" width="100" /></button> 
                <span class="name mt-3">{$email}</span>
                <div class="container">
                    <div class="row">
                        {if isset($msg_error)}
                            {foreach from=$msg_error item=$msg}
                                <div class="p-3 mb-2 bg-danger text-white">{$msg}</div>                                  
                            {/foreach}
                        {elseif isset($msg_succes)}
                            <div class="p-3 mb-2 bg-success text-white">{$msg_succes}</div>
                        {elseif isset($msg_error_profile)}
                            {foreach from=$msg_error_profile item=$msg}
                                <div class="p-3 mb-2 bg-danger text-white">{$msg}</div>                                  
                            {/foreach}
                        {/if}

                        <form action="{base_url('/customers/edite_profile/')}" method="post"  enctype='multipart/form-data'>
                            <p>Nom : <input type="text" name="nom"  value="{$name}"> </p>
                            <p>Prenom : <input type="text" name="prenom"  value="{$firstname}"> </p>
                            <p>Pseudo: <input type="text" name="pseudo"  value="{$pseudo}"></p>
                            <p>Adresses de facturation: <input type="text" name="adresse"  value="{$adresse}">  </p>
                            <p>Code Postal: <input type="text" name="cp"  value="{$zip}"></p>
                            <p>Pays: <input type="text" name="pays"  value="{$city}"></p>
                            <p>Votre email: <input type="email" name="email"  value="{$email}"> </p>
                            <p>Votre numero de telephone: <input type="tel" name="tel"  value="{$tel}"> </p>
                            <p>Photo de profile: <input type="file" name="photo_profile"> 
                                <p style="color: red;">Format accepter .png, .webp, .jpeg, .jpg</p>
                            </p>
                            <p>Entrez votre nouveaux mot de passe: <input type="password" name="new_password"> </p>
                            <p>Confirmez votre nouveaux mot de passe: <input type="password" name="new_password_confirm"> </p>
                            {if $reservation_achieve neq false}
                                {for $i=0 to count($reservation_achieve) -1 }
                                    <p>Vous avez effectuer {$reservation_achieve[$i]->nb_reservation} reservation dans l'hotel ardis {$reservation_achieve[$i]->hotel_nom}.</p>
                                {/for}
                            {/if}
                            <input type="submit" value="Valider les modification" class='btn-primary submit-btn '>
                        </form>
                        <form action="{base_url('/customers/delete_profile/')}" method="POST">
                            <input type="submit" class='btn-danger' value='Supprimer votre compte'>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}
{/if}

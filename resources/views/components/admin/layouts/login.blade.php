<x-admin.guest>
    <form action="" method="post">
        <x-admin.form.imput :label="__('Email')" :name="'email'" :type="'email'"
                            :placeholder="'Entrer votre adresse mail'"/>
        <x-admin.form.imput :label="__('Mot de passe')" :name="'password'" :type="'password'"
                            :placeholder="'Entrer votre mot de passe'"/>

        <div>
        <x-admin.form.checkBox :name="'remember me'" :value="'se souvenir de moi'" />
        <a href="/">Mot de passe oublié</a>
        </div>
        <x-admin.form.button :value="'Envoyer'" />
    </form>
</x-admin.guest>

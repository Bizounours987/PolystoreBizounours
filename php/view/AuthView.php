<?php
namespace view;

class AuthView {

    public static function renderForm(string $message) {

        $form = '<form method="POST">
          <label for="email">Courriel :</label>
          <input type="email" name="email" required="required" placeholder="vous@chez.mel"/>
          <label for="password">Mot de passe :</label>
          <input type="password" name="password" required="required" placeholder="Mot de passe"/>
          <input type="submit"/>
        </form>';
        if ($message != '') {
          $form = '<p style="text-align:center">' . $message . '</p>' . $form;
        }
        DefaultView::renderHTML('Store - Authentification', $form);
      } 
}


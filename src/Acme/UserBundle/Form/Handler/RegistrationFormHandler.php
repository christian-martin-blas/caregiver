<?php

namespace Acme\UserBundle\Form\Handler;

use FOS\UserBundle\Form\Handler\RegistrationFormHandler as BaseHandler;
use FOS\UserBundle\Model\UserInterface;

class RegistrationFormHandler extends BaseHandler
{

    public function process($confirmation = false)
    {
        $user = $this->userManager->createUser();
        $this->form->setData($user);

        if ('POST' == $this->request->getMethod()) {
            $this->form->bind($this->request);
            $r = $this->form['roles']->getData();
            $user->addRole($r[0]);
            if ($this->form->isValid()) {
                $this->onSuccess($user, $confirmation);

                // do your custom logic here

                return true;
            }
        }

        return false;
    }
}
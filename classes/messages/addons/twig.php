<?php

namespace Messages;

class Messages_Addons_Twig extends \Twig_Extension
{

    /**
     * Gets the name of the extension.
     *
     * @return  string
     */
    public function getName()
    {
        return 'messages';
    }

    /**
     * Sets up all of the functions this extension makes available.
     *
     * @return  array
     */
    public function getFunctions()
    {
        return array(
            'messages_render' => new \Twig_Function_Method($this, 'render'),
            'messages_render_error' => new \Twig_Function_Method($this, 'renderError'),
            'messages_render_warning' => new \Twig_Function_Method($this, 'renderWarning'),
            'messages_render_success' => new \Twig_Function_Method($this, 'renderSuccess'),
            'messages_render_info' => new \Twig_Function_Method($this, 'renderInfo'),
        );
    }

    public function renderError()
    {
        return $this->render(array('error'));
    }

    public function renderWarning()
    {
        return $this->render(array('warning'));
    }

    public function renderSuccess()
    {
        return $this->render(array('success'));
    }

    public function renderInfo()
    {
        return $this->render(array('info'));
    }

    public function render($types = array('error', 'warning', 'success', 'info'))
    {
        $res = '';
        if (\Messages::any())
            $res .= '<br/>';


        foreach ($types as $type)
        {
            foreach (\Messages::instance()->get($type) as $message)
            {
                $res .= '<div class="alert alert-'.$message['type'].'">'.$message['body'].'</div>'."\n";
            }
        }
        \Messages::reset();

        return $res;
    }

}

/* End of file twig.php */

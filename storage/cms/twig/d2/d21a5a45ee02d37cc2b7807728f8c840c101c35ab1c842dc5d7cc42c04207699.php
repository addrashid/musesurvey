<?php

/* /home/musesurvey/public_html/themes/rainlab-vanilla/pages/home.htm */
class __TwigTemplate_4ec40697c47259e67690346c60b3b650392de47f1932a7009d683fd07061c853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 5
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/plugin-user.png");
        echo "\" alt=\"RainLab.User\" />
            <div class=\"caption\">
                <h3>Account management</h3>
                <p>The user plugin <em>RainLab.User</em> provides the basic account management features.</p>
                <br />
                <p>
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->pageFilter("account");
        echo "\" class=\"btn btn-lg btn-info\" role=\"button\">View Account</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/plugin-blog.png");
        echo "\" alt=\"RainLab.Blog\" />
            <div class=\"caption\">
                <h3>Blog articles</h3>
                <p>The user plugin <em>RainLab.Blog</em> provides robust authoring features.</p>
                <br />
                <p>
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('CMS')->pageFilter("blog");
        echo "\" class=\"btn btn-lg btn-success\" role=\"button\">View Blog</a>
                </p>
            </div>
        </div>
    </div>

    <div class=\"col-sm-6 col-md-4\">
        <div class=\"thumbnail text-center\">
            <br />
            <img src=\"";
        // line 35
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/plugin-forum.png");
        echo "\" alt=\"RainLab.Forum\" />
            <div class=\"caption\">
                <h3>Discussion forum</h3>
                <p>The forum plugin <em>RainLab.Forum</em> provides community discussion features.</p>
                <br />
                <p>
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('CMS')->pageFilter("forum");
        echo "\" class=\"btn btn-lg btn-warning\" role=\"button\">View Forum</a>
                </p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/musesurvey/public_html/themes/rainlab-vanilla/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 41,  67 => 35,  55 => 26,  46 => 20,  34 => 11,  25 => 5,  19 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-sm-6 col-md-4">*/
/*         <div class="thumbnail text-center">*/
/*             <br />*/
/*             <img src="{{ 'assets/images/plugin-user.png'|theme }}" alt="RainLab.User" />*/
/*             <div class="caption">*/
/*                 <h3>Account management</h3>*/
/*                 <p>The user plugin <em>RainLab.User</em> provides the basic account management features.</p>*/
/*                 <br />*/
/*                 <p>*/
/*                     <a href="{{ 'account'|page }}" class="btn btn-lg btn-info" role="button">View Account</a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-sm-6 col-md-4">*/
/*         <div class="thumbnail text-center">*/
/*             <br />*/
/*             <img src="{{ 'assets/images/plugin-blog.png'|theme }}" alt="RainLab.Blog" />*/
/*             <div class="caption">*/
/*                 <h3>Blog articles</h3>*/
/*                 <p>The user plugin <em>RainLab.Blog</em> provides robust authoring features.</p>*/
/*                 <br />*/
/*                 <p>*/
/*                     <a href="{{ 'blog'|page }}" class="btn btn-lg btn-success" role="button">View Blog</a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-sm-6 col-md-4">*/
/*         <div class="thumbnail text-center">*/
/*             <br />*/
/*             <img src="{{ 'assets/images/plugin-forum.png'|theme }}" alt="RainLab.Forum" />*/
/*             <div class="caption">*/
/*                 <h3>Discussion forum</h3>*/
/*                 <p>The forum plugin <em>RainLab.Forum</em> provides community discussion features.</p>*/
/*                 <br />*/
/*                 <p>*/
/*                     <a href="{{ 'forum'|page }}" class="btn btn-lg btn-warning" role="button">View Forum</a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/

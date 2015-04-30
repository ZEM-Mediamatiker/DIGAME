<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/pages/03.anwenderfunktionen/05.bearbeiten/01.funktionen */
class __TwigTemplate_64ba63e4831f1c022f96d93ef8028c80b5911b82655cf183638886a6fb22debb extends Twig_Template
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
        echo "<h2>Funktionen Bearbeiten-Bereich</h2>
<hr />
<p>Der Bearbeiten-Bereich (6) aus Abbildung 2: Grundaufbau enthält alle Möglichkeiten um ein Media Asset zu bearbeiten. Nachdem ein Media Asset erstellt wurde oder ein bestehendes Media Asset über eine der Suchmöglichkeiten gefunden wurde, können dessen Daten definiert oder bestehende bearbeitet werden. Dazu muss das entsprechende Media Asset mit der Maus angewählt werden. Das angewählte Media Asset wird zur Markierung mit einem gelben Rahmen umgeben. Im Bearbeiten-Bereich werden die Daten des markierten Media Assets dargestellt.</p>
<blockquote>
<blockquote>
<blockquote>
<p>Falls mehrere Assets über dieselben Metadaten verfügen, können diese auch gleichzeitig bearbeitet werden. Dazu müssen alle Assets die gemeinsam bearbeitet werden sollen markiert werden. Dies kann mit Ctrl + linke Maustaste oder Shift + linke Maustaste gemacht werden.</p>
</blockquote>
</blockquote>
</blockquote>
<p>Der Bearbeiten-Bereich verfügt über folgende Funktionen und Informationen:</p>
<ul>
<li>Bearbeiten (1): Dateihandling und generelle Informationen zur effektiven Datei (Bild, Video, Dokument)</li>
<li>Gruppieren (2): erlaubt mehrere Media Assets in einer thematischen Gruppe zusammenzufassen.</li>
<li>Stichworte (3): Zuordnung zu Stichworten im Stichwortbaum</li>
<li>Schema Viewer (4): zeigt alle vorhandenen Metadaten nur lesend an</li>
<li>Schema Editor (5): hier werden die Metadaten definiert und bearbeitet</li>
<li>Vorschaubilder (6): hier werden die Bilder angezeigt und verwaltet welche im Anzeige-Bereich verwendet werden sollen</li>
<li>Video: der Videoplayer wird nur angezeigt, wenn es sich um einen Film handelt</li>
<li>XMP (7): zeigt alle Metadaten an, welche zum Media Asset gehören, nebst den Digame-Metadaten auch Kameradaten oder Daten von Photoshop.</li>
</ul>
<p><br></p>
";
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "bearbeiten.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 19: Übersicht über den Bearbeiten-Bereich.</h6>
<p><br></p>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/DIGAME/user/pages/03.anwenderfunktionen/05.bearbeiten/01.funktionen";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 23,  19 => 1,);
    }
}

# Installation #

The installation process is the usual one for Elgg plugins.

  1. First make sure you have a working installation of Elgg.
  1. Copy the elgg-latex directory to the "mod" directory of your Elgg installation.
  1. Log in as an administrator and go to "Administration->Tool Administration"
  1. Find the "elgg-latex" entry and click "Enable"
  1. Make sure that you also disable any WYSIWYG editors, such as the TinyMCE plugin, because these do not play well with LaTeX markup.

# Testing Your Installation #

To test that your installation is working create a new blog post, page, message, etc. and enter some LaTeX markup, e.g.

```
\section{First Section}

\begin{equation}
E^2 = p^2c^2 + m^2c^4
\end{equation}
```

After submitting your post, you should see the markup typset correctly.  If not, check the [Troubleshooting](Troubleshooting.md) page.  For further information see the [Usage](Usage.md) page.
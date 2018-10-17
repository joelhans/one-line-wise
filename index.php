<?php include('lines.php'); ?>

<!doctype html>
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Article">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Standard meta properties -->
  <title>One-line wise • One-liners for smart Linux devs</title>
  <meta name="description" content="The best terminal one-liners from and for smart admins + devs." />
  <link rel="canonical" href="https://www.ssdnodes.com/tools/one-line-wise/" />
  <link rel="icon" type="image/png" href="dist/img/favicon-16x16.png" sizes="16x16">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@SSDNodes">
  <meta name="twitter:title" content="One-line wise • One-liners for smart Linux devs">
  <meta name="twitter:description" content="The best terminal one-liners from and for smart admins + devs.">
  <meta name="twitter:creator" content="@SSDNodes">
  <meta name="twitter:image" content="">

  <!-- Open Graph data -->
  <meta property="og:title" content="One-line wise • One-liners for smart Linux devs" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://www.ssdnodes.com/tools/one-line-wise/" />
  <meta name="og:image" content="dist/img/one_line_wise.png" />
  <meta property="og:description" content="The best terminal one-liners from and for smart admins + devs." />
  <meta property="og:site_name" content="SSD Nodes" />
  
  <link href='//fonts.googleapis.com/css?family=Niramit|Source+Code+Pro:400,600,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="dist/css/main.css?<?php echo filemtime('dist/css/main.css'); ?>" />
  <link rel="stylesheet" href="dist/css/tomorrow-night.css">

  <!-- Google Analytics -->
  <script>
    window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
    ga('create', 'UA-23970959-1', 'auto');
    ga('send', 'pageview');
    setTimeout("ga('send', 'event', 'read', '5 seconds')",5000);
  </script>
  <script async src='https://stats.ssdnodes.com/stats.js'></script>
  <!-- End Google Analytics -->

</head>

<body class="font-mono">

  <div class="container mx-auto">

    <section class="hero section mt-32 mb-16">

      <div class="w-full px-4">

        <h1 class="text-6xl font-black text-pink text-center">One-line wise</h1>
        <h2 class="font-sans text-2xl font-medium leading-normal text-center mt-4">The best terminal one-liners from and for smart admins + devs.</h2>
        <h3 class="text-base font-normal leading-normal text-center mt-6">Hosted and brought to you by <a class="p-2 cursor-pointer" href="https://www.ssdnodes.com" target="_blank">SSD Nodes</a>.</h3>

      </div>

    </section>

    <section class="flex flex-row flex-wrap items-stretch md:-mx-6 mb-20">

      <div class="sm:w-full md:w-1/2 lg:w-1/3 px-4 lg:ml-auto md:ml-0 sm:mb-4">
        <div class="relative p-4 border border-pink-light rounded-sm shadow">

          <p class="mb-4">Search for a one-liner:</p>
          <input type="text" id="searchbox" class="w-full border border-teal rounded-sm p-4" placeholder="sed, loop, network" />
          <button class="clear absolute right text-xl text-base font-black">X</button>

        </div>
      </div>

      <div class="sm:w-100 md:w-1/2 lg:w-1/3 px-4 lg:mr-auto md:mr-0">
        <div class="p-4 border border-pink-light rounded-sm shadow">

          <p class="mb-4">Choose a popular tag:</p>

          <?php foreach($tags as $key => $val) : ?>

          <span class="tag tag--<?php echo $key; ?> inline-block text-sm text-<?php echo $val['color']; ?> border border-indigo-darkest rounded-sm p-2 mb-2 cursor-pointer hover:bg-grey-light"><?php echo $key; ?></span>

          <?php endforeach; ?>

        </div>
      </div>

    </section>

    <section class="cards section mb-16">

      <?php 
        foreach ($lines as $key => $val) : 
        $tagColor = $val['tag'];
      ?>

      <div class="card <?php echo $ids[$key]; ?> w-full md:w-1/2 lg:w-1/3 px-4 mb-8 rounded-sm">
        <div class="border border-teal rounded-sm p-4 shadow">

          <textarea class="absolute"><?php $rep = array("<span class=\"hl\">", "</span>"); echo str_replace($rep, "", $val['line']); ?></textarea>
          <pre class="relative mb-6"><code class="font-semibold rounded-sm p-8 hljs bash"><?php echo $val['line']; ?></code><span class="copy text-xs text-white absolute pin-b pin-r m-1 cursor-pointer hover:text-teal">Copy</span></pre>
          <p class="font-sans text-base font-normal leading-normal mb-6"><?php echo $val['description']; ?></p>
          <span class="tag inline-block text-sm text-<?php echo $tags[$tagColor]['color']; ?> border border-indigo-darkest rounded-sm p-2 cursor-pointer hover:bg-grey-light"><?php echo $val['tag']; ?></span>

        </div>
      </div>
      
      <?php endforeach; ?>

    </section>

    <section class="section mb-8">

      <div class="w-full md:w-1/2 lg:w-1/3 mb-8 px-4">
        <div class="content border border-pink-light rounded-sm px-4 py-6 shadow">

          <h3 class="text-lg font-semibold mb-4">How to use <em class="font-black">One-line wise</em></h3>
          <p class="font-sans text-base leading-normal mb-6">Any time you see code that <code><span class="font-mono hl">looks like this</span></code> (bold red with a red underline), it's a signal that you need to replace that text with something else. We try to specify what that text should be in the one-liner's description.</p>
          <h3 class="text-lg font-semibold mb-4">What's next?</h3>
          <p class="font-sans text-base leading-normal mb-2">We're currently working on additional features&mdash;here are a few:</p>
          <ul class="leading-normal mb-4">
            <li class="text-sm">Many, many more one-liners!</li>
            <li class="text-sm">Permalinks to one-liners</li>
            <li class="text-sm">A primitive voting system (longshot)</li>
          </ul>
          <h3 class="text-lg font-semibold mb-4">Why build this tool?</h3>
          <p class="font-sans text-base leading-normal mb-2">What do you know—we wrote a <a class="px-1 py-px" href="https://blog.ssdnodes.com/blog/one-liners-tool-resource/" target="_blank">blog post</a> about this exact topic over on our blog, <a class="px-1 py-px" href="https://blog.ssdnodes.com/blog/" target="_blank"><em>Serverwise</em></a>. Mostly, we’re all about helping people learn and get more from their VPS.</p>

        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/3 mb-8 px-4">
        <div class="border border-indigo-darkest rounded-sm px-4 py-6 shadow">

          <h3 class="text-lg font-semibold mb-4">Send us a one-liner</h3>
          <p class="font-sans text-base leading-normal mb-2">We're open to new one-liners and fixes/suggestions to existing ones! We want this to be a fun, evolving, and useful resource for developers and sysadmins of all skill levels.</p>
          <p class="font-sans text-base leading-normal mb-2">You can contribute in two ways. <strong>First, you can send an email to <a class="px-1 py-px" href="mailto:joel@ssdnodes.com">joel@ssdnodes.com</a></strong>.</p>
          <p class="font-sans text-base leading-normal mb-2">Be sure to include the following:</p>
          <ul class="leading-normal mb-6">
            <li class="text-sm">The one-liner</li>
            <li class="text-sm">A description of what the one-liner does, and how it works, if necessary.</li>
            <li class="text-sm">The most appropriate existing tag (or recommend a new one)</li>
            <li class="text-sm">Whether you'd like to be credited, and how: website, Twitter, email, etc</li>
          </ul>
          <p class="font-sans text-base leading-normal mb-2">You can also <strong>contribute <a class="px-1 py-px" href="https://github.com/joelhans/one-line-wise" target="_blank">via GitHub</a></strong>.</p>
          <p class="font-sans text-base leading-normal mb-2">You can create a <a class="px-1 py-px" href="https://github.com/joelhans/one-line-wise/issues" target="_blank">new issue</a> or a <a class="px-1 py-px" href="https://github.com/joelhans/one-line-wise/pulls" target="_blank">pull request</a> for fixes, improvements, and additional one-liners.<p>

        </div>
      </div>
      <div class="w-full md:w-2/3 lg:w-1/3 mb-8 md:mx-auto px-4">
        <div class="border border-teal rounded-sm px-4 py-6 shadow">

          <h3 class="text-lg font-semibold mb-4">About this tool</h3>
          <p class="font-sans text-base leading-normal mb-2">This was built by the people behind <a class="px-1 py-px" href="https://www.ssdnodes.com" target="_blank">SSD Nodes</a> as a way to share our server wisdom and test out the <a class="px-1 py-px" href="https://tailwindcss.com" target="_blank">Tailwind CSS</a> framework and its "utility-first" methodology and explore whether it's a viable development process for us.</p>
          <p class="font-sans text-base leading-normal mb-2">View <em>One-line wise</em> on <a class="px-1 py-px" href="https://github.com/joelhans/one-line-wise" target="_blank">GitHub</a>.</p>
          <p class="font-sans text-base leading-normal mb-4">We hope you enjoy!</p>
          <p class="text-sm font-semibold text-teal uppercase mb-4">Last updated: October 17, 2018</p>
          <p>
            <a class="github-button" href="https://github.com/joelhans/one-line-wise" data-show-count="true" aria-label="Star joelhans/one-line-wise on GitHub">Star</a>
            <a class="github-button" href="https://github.com/joelhans/one-line-wise/issues" data-show-count="true" aria-label="Issue joelhans/one-line-wise on GitHub">Issue</a>
          </p>

        </div>
      </div>

    </section>

  </div>

  <script src="dist/js/main.js?<?php echo filemtime('dist/js/main.js'); ?>"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="dist/js/highlight.pack.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>

  <!-- intercom -->
  <script>
    window.intercomSettings = {
      app_id: "zxfgidbd"
    };
  </script>
  <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/zxfgidbd';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
  <!-- intercom -->

</body>
</html>

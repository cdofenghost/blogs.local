<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-category--categoryName-">
                                <a href="#endpoints-GETapi-category--categoryName-">GET api/category/{categoryName}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-blog-create">
                                <a href="#endpoints-GETapi-blog-create">GET api/blog/create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-blog-create">
                                <a href="#endpoints-POSTapi-blog-create">POST api/blog/create</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-blog--blog_id-">
                                <a href="#endpoints-GETapi-blog--blog_id-">GET api/blog/{blog_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-user-register">
                                <a href="#endpoints-GETapi-user-register">GET api/user/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-user-update">
                                <a href="#endpoints-GETapi-user-update">GET api/user/update</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-user-logout">
                                <a href="#endpoints-POSTapi-user-logout">POST api/user/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-user--user_id-">
                                <a href="#endpoints-DELETEapi-user--user_id-">DELETE api/user/{user_id}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 29, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-category--categoryName-">GET api/category/{categoryName}</h2>

<p>
</p>



<span id="example-requests-GETapi-category--categoryName-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/category/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/category/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-category--categoryName-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-category--categoryName-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-category--categoryName-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-category--categoryName-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-category--categoryName-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-category--categoryName-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-category--categoryName-" data-method="GET"
      data-path="api/category/{categoryName}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-category--categoryName-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-category--categoryName-"
                    onclick="tryItOut('GETapi-category--categoryName-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-category--categoryName-"
                    onclick="cancelTryOut('GETapi-category--categoryName-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-category--categoryName-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/category/{categoryName}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-category--categoryName-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-category--categoryName-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>categoryName</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="categoryName"                data-endpoint="GETapi-category--categoryName-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-blog-create">GET api/blog/create</h2>

<p>
</p>



<span id="example-requests-GETapi-blog-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/blog/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/blog/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-blog-create">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;ru&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=http://localhost/css/welcome.css&gt;
    &lt;link rel=&quot;stylesheet&quot; href=http://localhost/css/register.css&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.googleapis.com&quot;&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.gstatic.com&quot; crossorigin&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;title&gt;Блоги&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;    
    &lt;main style=&quot;margin-top: 48px&quot;&gt;
    &lt;div style=&quot;margin: auto;&quot;&gt;
        &lt;form action=&quot;/blog/create&quot; method=&quot;POST&quot;&gt;
    &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;&quot; autocomplete=&quot;off&quot;&gt;    &lt;input type=&quot;hidden&quot; value= name=&quot;author_id&quot;/&gt;
    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;label for=&quot;title&quot; class=&quot;inline-block text-lg mb-2&quot;&gt;Title&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;border border-gray-200 rounded p-2 w-full&quot; name=&quot;title&quot;/&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;label for=&quot;category_id&quot; class=&quot;inline-block text-lg mb-2&quot;&gt;Category&lt;/label&gt;
        &lt;input list=&quot;categories&quot; id=&quot;category&quot; name=&quot;category_id&quot; class=&quot;inline-block text-lg mb-2&quot;&gt;
        &lt;datalist id=&quot;categories&quot;&gt;
                            &lt;option value=&quot;Rocket Science&quot;&gt;
                            &lt;option value=&quot;Physics&quot;&gt;
                            &lt;option value=&quot;IT Stuff&quot;&gt;
                    &lt;/datalist&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;label for=&quot;content&quot; class=&quot;inline-block text-lg mb-2&quot;&gt;Content&lt;/label&gt;
        &lt;textarea 
            id=&quot;content&quot; 
            name=&quot;content&quot; 
            class=&quot;border border-gray-200 rounded p-2 w-full&quot;
            rows=&quot;5&quot;
            placeholder=&quot;Введите ваш текст здесь...&quot;&gt;&lt;/textarea&gt;

        &lt;p class=&quot;text-red-500 text-xs mt-1&quot;&gt;
            Please enter a valid email
        &lt;/p&gt;
    &lt;/div&gt;
    
    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;label for=&quot;preview&quot; class=&quot;inline-block text-lg mb-2&quot;&gt;Preview Image&lt;/label&gt;
        &lt;input type=&quot;file&quot; class=&quot;border border-gray-200 rounded p-2 w-full&quot; name=&quot;preview&quot; accept=&quot;.jpg,.jpeg,.png&quot;/&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;button type=&quot;submit&quot; class=&quot;bg-laravel text-white rounded py-2 px-4 hover:bg-black&quot;&gt;Upload Blog&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;    &lt;/div&gt;
    &lt;/main&gt;
&lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETapi-blog-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-blog-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-blog-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-blog-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-blog-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-blog-create" data-method="GET"
      data-path="api/blog/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-blog-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-blog-create"
                    onclick="tryItOut('GETapi-blog-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-blog-create"
                    onclick="cancelTryOut('GETapi-blog-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-blog-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/blog/create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-blog-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-blog-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-blog-create">POST api/blog/create</h2>

<p>
</p>



<span id="example-requests-POSTapi-blog-create">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/blog/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"author_id\": 16,
    \"category_id\": \"architecto\",
    \"title\": \"architecto\",
    \"content\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/blog/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "author_id": 16,
    "category_id": "architecto",
    "title": "architecto",
    "content": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-blog-create">
</span>
<span id="execution-results-POSTapi-blog-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-blog-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-blog-create"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-blog-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-blog-create">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-blog-create" data-method="POST"
      data-path="api/blog/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-blog-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-blog-create"
                    onclick="tryItOut('POSTapi-blog-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-blog-create"
                    onclick="cancelTryOut('POSTapi-blog-create');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-blog-create"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/blog/create</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-blog-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-blog-create"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>author_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="author_id"                data-endpoint="POSTapi-blog-create"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category_id"                data-endpoint="POSTapi-blog-create"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-blog-create"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-blog-create"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-blog--blog_id-">GET api/blog/{blog_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-blog--blog_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/blog/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/blog/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-blog--blog_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;ru&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=http://localhost/css/welcome.css&gt;
    &lt;link rel=&quot;stylesheet&quot; href=http://localhost/css/blog-card.css&gt;
    &lt;link rel=&quot;stylesheet&quot; href=http://localhost/css/search-bar.css&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.googleapis.com&quot;&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.gstatic.com&quot; crossorigin&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;title&gt;Блоги&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header&gt;
    &lt;a href=&quot;/&quot; style=&quot;width: 100%&quot;&gt;
        &lt;button class=&quot;home-button&quot;&gt;Space &amp; Science: The Blog&lt;/button&gt;
    &lt;/a&gt;
    &lt;a href=&quot;/category/Rocket Science&quot; style=&quot;width: 100%&quot;&gt;
        &lt;button class=&quot;category-button&quot;&gt;Rocket Science&lt;/button&gt;
    &lt;/a&gt;
    &lt;a href=&quot;/category/Physics&quot; style=&quot;width: 100%&quot;&gt;
        &lt;button class=&quot;category-button&quot;&gt;Physics&lt;/button&gt;
    &lt;/a&gt;
    &lt;a href=&quot;/category/IT Stuff&quot; style=&quot;width: 100%&quot;&gt;
        &lt;button class=&quot;category-button&quot;&gt;IT Stuff&lt;/button&gt;
    &lt;/a&gt;

        &lt;a href=&quot;/user/register&quot; style=&quot;text-decoration: none;&quot;&gt;
        &lt;button class=&quot;category-button&quot; style=&quot;display: flex; align-items: center;&quot;&gt;
            &lt;i class=&#039;fas fa-user&#039; style=&quot;margin-right: 8px&quot;&gt;&lt;/i&gt;
            Register
        &lt;/button&gt;
    &lt;/a&gt;
        
&lt;/header&gt;    
    &lt;main style=&quot;margin-top: 48px&quot;&gt;
        &lt;h1 style=&quot;text-shadow: 1px 4px 4px rgba(0, 0, 0, 0.5);&quot;&gt;Mrs. Brenna Little&lt;/h1&gt;
        &lt;h2 style=&quot;color: #d4caca&quot;&gt;&lt;i&gt;by Marjolaine Borer IV&lt;/i&gt;&lt;/h2&gt;
        &lt;div class=&quot;blog-container&quot; style=&quot;margin-top: 24px&quot;&gt;
            Autem aut beatae at corporis qui aut. Velit necessitatibus sunt dolor dignissimos temporibus saepe. Quo dolores deserunt odit qui consequatur numquam consequatur. Ullam doloremque unde illum fugiat. Velit illum corporis consectetur odit. Sit est saepe in eligendi ad quisquam porro. Aperiam occaecati commodi suscipit. Recusandae qui minus magni sed accusantium quas quia. Dolores quasi dolorum sed eligendi quasi et error.
        &lt;/div&gt;
    &lt;/main&gt;
&lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETapi-blog--blog_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-blog--blog_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-blog--blog_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-blog--blog_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-blog--blog_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-blog--blog_id-" data-method="GET"
      data-path="api/blog/{blog_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-blog--blog_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-blog--blog_id-"
                    onclick="tryItOut('GETapi-blog--blog_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-blog--blog_id-"
                    onclick="cancelTryOut('GETapi-blog--blog_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-blog--blog_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/blog/{blog_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-blog--blog_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-blog--blog_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>blog_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="blog_id"                data-endpoint="GETapi-blog--blog_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the blog. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-user-register">GET api/user/register</h2>

<p>
</p>



<span id="example-requests-GETapi-user-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;ru&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=http://localhost/css/welcome.css&gt;
    &lt;link rel=&quot;stylesheet&quot; href=http://localhost/css/register.css&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.googleapis.com&quot;&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.gstatic.com&quot; crossorigin&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;title&gt;Блоги&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;    
    &lt;main style=&quot;margin-top: 48px&quot;&gt;
    &lt;div style=&quot;margin: auto;&quot;&gt;
        &lt;form action=&quot;/user/register&quot; method=&quot;POST&quot;&gt;
    &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;&quot; autocomplete=&quot;off&quot;&gt;    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;label for=&quot;name&quot; class=&quot;inline-block text-lg mb-2&quot;&gt;
            Name
        &lt;/label&gt;
        &lt;input
            type=&quot;text&quot;
            class=&quot;border border-gray-200 rounded p-2 w-full&quot;
            name=&quot;name&quot;
        /&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;label for=&quot;email&quot; class=&quot;inline-block text-lg mb-2&quot;
            &gt;Email&lt;/label
        &gt;
        &lt;input
            type=&quot;email&quot;
            class=&quot;border border-gray-200 rounded p-2 w-full&quot;
            name=&quot;email&quot;
        /&gt;
        &lt;!-- Error Example --&gt;
        &lt;p class=&quot;text-red-500 text-xs mt-1&quot;&gt;
            Please enter a valid email
        &lt;/p&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;label
            for=&quot;password&quot;
            class=&quot;inline-block text-lg mb-2&quot;
        &gt;
            Password
        &lt;/label&gt;
        &lt;input
            type=&quot;password&quot;
            class=&quot;border border-gray-200 rounded p-2 w-full&quot;
            name=&quot;password&quot;
        /&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;label
            for=&quot;password_confirmation&quot;
            class=&quot;inline-block text-lg mb-2&quot;
        &gt;
            Confirm Password
        &lt;/label&gt;
        &lt;input
            type=&quot;password&quot;
            class=&quot;border border-gray-200 rounded p-2 w-full&quot;
            name=&quot;password_confirmation&quot;
        /&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;button
            type=&quot;submit&quot;
            class=&quot;bg-laravel text-white rounded py-2 px-4 hover:bg-black&quot;
        &gt;
            Sign Up
        &lt;/button&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mt-8&quot;&gt;
        &lt;p&gt;
            Already have an account?
            &lt;a href=&quot;/&quot; class=&quot;text-laravel&quot;
                &gt;Login&lt;/a
            &gt;
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/form&gt;    &lt;/div&gt;
    &lt;/main&gt;
&lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user-register" data-method="GET"
      data-path="api/user/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user-register"
                    onclick="tryItOut('GETapi-user-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user-register"
                    onclick="cancelTryOut('GETapi-user-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-user-update">GET api/user/update</h2>

<p>
</p>



<span id="example-requests-GETapi-user-update">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user/update" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/update"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user-update">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;ru&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;UTF-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=http://localhost/css/welcome.css&gt;
    &lt;link rel=&quot;stylesheet&quot; href=http://localhost/css/register.css&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.googleapis.com&quot;&gt;
    &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.gstatic.com&quot; crossorigin&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;title&gt;Блоги&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;    
    &lt;main style=&quot;margin-top: 48px&quot;&gt;
    &lt;div style=&quot;margin: auto;&quot;&gt;
        &lt;form action=&quot;/user/update&quot; method=&quot;PUT&quot;&gt;
    &lt;input type=&quot;hidden&quot; name=&quot;_token&quot; value=&quot;&quot; autocomplete=&quot;off&quot;&gt;    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;label for=&quot;name&quot; class=&quot;inline-block text-lg mb-2&quot;&gt;
            Name
        &lt;/label&gt;
        &lt;input
            type=&quot;text&quot;
            class=&quot;border border-gray-200 rounded p-2 w-full&quot;
            name=&quot;name&quot;
        /&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;label for=&quot;email&quot; class=&quot;inline-block text-lg mb-2&quot;
            &gt;Email&lt;/label
        &gt;
        &lt;input
            type=&quot;email&quot;
            class=&quot;border border-gray-200 rounded p-2 w-full&quot;
            name=&quot;email&quot;
        /&gt;
        &lt;!-- Error Example --&gt;
        &lt;p class=&quot;text-red-500 text-xs mt-1&quot;&gt;
            Please enter a valid email
        &lt;/p&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;label
            for=&quot;password&quot;
            class=&quot;inline-block text-lg mb-2&quot;
        &gt;
            Password
        &lt;/label&gt;
        &lt;input
            type=&quot;password&quot;
            class=&quot;border border-gray-200 rounded p-2 w-full&quot;
            name=&quot;password&quot;
        /&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;label
            for=&quot;password_confirmation&quot;
            class=&quot;inline-block text-lg mb-2&quot;
        &gt;
            Repeat Password
        &lt;/label&gt;
        &lt;input
            type=&quot;password&quot;
            class=&quot;border border-gray-200 rounded p-2 w-full&quot;
            name=&quot;password_confirmation&quot;
        /&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mb-6&quot;&gt;
        &lt;button
            type=&quot;submit&quot;
            class=&quot;bg-laravel text-white rounded py-2 px-4 hover:bg-black&quot;
        &gt;
            Sign Up
        &lt;/button&gt;
    &lt;/div&gt;

    &lt;div class=&quot;mt-8&quot;&gt;
        &lt;p&gt;
            Already have an account?
            &lt;a href=&quot;/&quot; class=&quot;text-laravel&quot;
                &gt;Login&lt;/a
            &gt;
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/form&gt;    &lt;/div&gt;
    &lt;/main&gt;
&lt;/body&gt;
&lt;/html&gt;</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user-update" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user-update"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-update"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-update">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user-update" data-method="GET"
      data-path="api/user/update"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user-update', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user-update"
                    onclick="tryItOut('GETapi-user-update');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user-update"
                    onclick="cancelTryOut('GETapi-user-update');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user-update"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user/update</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user-update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user-update"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-user-logout">POST api/user/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-user-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/user/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-user-logout">
</span>
<span id="execution-results-POSTapi-user-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-user-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-user-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-user-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-user-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-user-logout" data-method="POST"
      data-path="api/user/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-user-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-user-logout"
                    onclick="tryItOut('POSTapi-user-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-user-logout"
                    onclick="cancelTryOut('POSTapi-user-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-user-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/user/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-user-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-user-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-DELETEapi-user--user_id-">DELETE api/user/{user_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-user--user_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/user/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-user--user_id-">
</span>
<span id="execution-results-DELETEapi-user--user_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-user--user_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-user--user_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-user--user_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-user--user_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-user--user_id-" data-method="DELETE"
      data-path="api/user/{user_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-user--user_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-user--user_id-"
                    onclick="tryItOut('DELETEapi-user--user_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-user--user_id-"
                    onclick="cancelTryOut('DELETEapi-user--user_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-user--user_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/user/{user_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-user--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-user--user_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="user_id"                data-endpoint="DELETEapi-user--user_id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>

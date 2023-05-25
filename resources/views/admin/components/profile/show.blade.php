@extends('admin.layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <h1>My Profile</h1>

        <!-- Display user profile information here -->
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>

        <!-- Add more profile details as needed -->
    </div>
@endsection
{{--
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="svLptZODvy6vaenJMQQNJ6GIu0EUQnT5limeC14k">

        <title> Profile </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="http://127.0.0.1:8001/css/styles.min.css">

        <!-- Scripts -->
        <link rel="preload" as="style" href="http://127.0.0.1:8001/build/assets/app-69d6d639.css" /><link rel="modulepreload" href="http://127.0.0.1:8001/build/assets/app-9eb8117e.js" /><link rel="stylesheet" href="http://127.0.0.1:8001/build/assets/app-69d6d639.css" /><script type="module" src="http://127.0.0.1:8001/build/assets/app-9eb8117e.js"></script>
        <!-- Styles -->
        <!-- Livewire Styles -->
<style >
    [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {
        display: none;
    }

    [wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {
        display:none;
    }

    [wire\:offline] {
        display: none;
    }

    [wire\:dirty]:not(textarea):not(input):not(select) {
        display: none;
    }

    input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
        animation-duration: 50000s;
        animation-name: livewireautofill;
    }

    @keyframes livewireautofill { from {} }
</style>
    <link rel='stylesheet' type='text/css' property='stylesheet' href='//127.0.0.1:8001/_debugbar/assets/stylesheets?v=1676989262&theme=auto' data-turbolinks-eval='false' data-turbo-eval='false'><script src='//127.0.0.1:8001/_debugbar/assets/javascript?v=1676989262' data-turbolinks-eval='false' data-turbo-eval='false'></script><script data-turbo-eval="false">jQuery.noConflict(true);</script>
<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; refStyle.innerHTML = '.phpdebugbar pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }'; doc.head.appendChild(refStyle); refStyle = doc.createElement('style'); doc.head.appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if (/\bsf-dump-compact\b/.test(oldClass)) { arrow = '▼'; newClass = 'sf-dump-expanded'; } else if (/\bsf-dump-expanded\b/.test(oldClass)) { arrow = '▶'; newClass = 'sf-dump-compact'; } else { return false; } if (doc.createEvent && s.dispatchEvent) { var event = doc.createEvent('Event'); event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse', true, false); s.dispatchEvent(event); } a.lastChild.innerHTML = arrow; s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass); if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (-1 == a[s].className.indexOf(newClass)) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; function collapse(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-expanded\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function expand(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className; if (/\bsf-dump-compact\b/.test(oldClass)) { toggle(a, recursive); return true; } return false; }; function collapseAll(root) { var a = root.querySelector('a.sf-dump-toggle'); if (a) { collapse(a, true); expand(a); return true; } return false; } function reveal(node) { var previous, parents = []; while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous.tagName) { parents.push(previous); } if (0 !== parents.length) { parents.forEach(function (parent) { expand(parent); }); return true; } return false; } function highlight(root, activeNode, nodes) { resetHighlightedNodes(root); Array.from(nodes||[]).forEach(function (node) { if (!/\bsf-dump-highlight\b/.test(node.className)) { node.className = node.className + ' sf-dump-highlight'; } }); if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) { activeNode.className = activeNode.className + ' sf-dump-highlight-active'; } } function resetHighlightedNodes(root) { Array.from(root.querySelectorAll('.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private')).forEach(function (strNode) { strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, ''); strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, ''); }); } return function (root, x) { root = doc.getElementById(root); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), options = {"maxDepth":1,"maxStringLength":160,"fileLinkFormat":false}, elt = root.getElementsByTagName('A'), len = elt.length, i = 0, s, h, t = []; while (i < len) t.push(elt[i++]); for (i in x) { options[i] = x[i]; } function a(e, f) { addEventListener(root, e, function (e, n) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } else { n = /\bsf-dump-ellipsis\b/.test(e.target.className) ? e.target.parentNode : e.target; if ((n = n.nextElementSibling) && 'A' == n.tagName) { if (!/\bsf-dump-toggle\b/.test(n.className)) { n = n.nextElementSibling || n; } f(n, e, true); } } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } function xpathString(str) { var parts = str.match(/[^'"]+|['"]/g).map(function (part) { if ("'" == part) { return '"\'"'; } if ('"' == part) { return "'\"'"; } return "'" + part + "'"; }); return "concat(" + parts.join(",") + ", '')"; } function xpathHasClass(className) { return "contains(concat(' ', normalize-space(@class), ' '), ' " + className +" ')"; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a, e, c) { if (c) { e.target.style.cursor = "pointer"; } else if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = '.phpdebugbar pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e, c) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').slice(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if (/\bsf-dump-compact\b/.test(r.className)) { toggle(s, isCtrlKey(e)); } } if (c) { } else if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } else if (/\bsf-dump-str-toggle\b/.test(a.className)) { e.preventDefault(); e = a.parentNode.parentNode; e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a.parentNode.className); } }); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; if ('SAMP' == elt.tagName) { a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += elt.className == 'sf-dump-compact' ? '<span>▶</span>' : '<span>▼</span>'; a.className += ' sf-dump-toggle'; x = 1; if ('sf-dump' != elt.parentNode.className) { x += elt.parentNode.getAttribute('data-depth')/1; } } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) { a = a.slice(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { s = a.nextSibling; elt.appendChild(a); s.parentNode.insertBefore(a, s); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>▶</span>'; } else { elt.innerHTML = '<span>▶</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '…'; elt.className = 'sf-dump-ref'; } } } } } if (doc.evaluate && Array.from && root.children.length > 1) { root.setAttribute('tabindex', 0); SearchState = function () { this.nodes = []; this.idx = 0; }; SearchState.prototype = { next: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0; return this.current(); }, previous: function () { if (this.isEmpty()) { return this.current(); } this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1); return this.current(); }, isEmpty: function () { return 0 === this.count(); }, current: function () { if (this.isEmpty()) { return null; } return this.nodes[this.idx]; }, reset: function () { this.nodes = []; this.idx = 0; }, count: function () { return this.nodes.length; }, }; function showCurrent(state) { var currentNode = state.current(), currentRect, searchRect; if (currentNode) { reveal(currentNode); highlight(root, currentNode, state.nodes); if ('scrollIntoView' in currentNode) { currentNode.scrollIntoView(true); currentRect = currentNode.getBoundingClientRect(); searchRect = search.getBoundingClientRect(); if (currentRect.top < (searchRect.top + searchRect.height)) { window.scrollBy(0, -(searchRect.top + searchRect.height + 5)); } } } counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count(); } var search = doc.createElement('div'); search.className = 'sf-dump-search-wrapper sf-dump-search-hidden'; search.innerHTML = ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> '; root.insertBefore(search, root.firstChild); var state = new SearchState(); var searchInput = search.querySelector('.sf-dump-search-input'); var counter = search.querySelector('.sf-dump-search-count'); var searchInputTimer = 0; var previousSearchQuery = ''; addEventListener(searchInput, 'keyup', function (e) { var searchQuery = e.target.value; /* Don't perform anything if the pressed key didn't change the query */ if (searchQuery === previousSearchQuery) { return; } previousSearchQuery = searchQuery; clearTimeout(searchInputTimer); searchInputTimer = setTimeout(function () { state.reset(); collapseAll(root); resetHighlightedNodes(root); if ('' === searchQuery) { counter.textContent = '0 of 0'; return; } var classMatches = [ "sf-dump-str", "sf-dump-key", "sf-dump-public", "sf-dump-protected", "sf-dump-private", ].map(xpathHasClass).join(' or '); var xpathResult = doc.evaluate('.//span[' + classMatches + '][contains(translate(child::text(), ' + xpathString(searchQuery.toUpperCase()) + ', ' + xpathString(searchQuery.toLowerCase()) + '), ' + xpathString(searchQuery.toLowerCase()) + ')]', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null); while (node = xpathResult.iterateNext()) state.nodes.push(node); showCurrent(state); }, 400); }); Array.from(search.querySelectorAll('.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function (btn) { addEventListener(btn, 'click', function (e) { e.preventDefault(); -1 !== e.target.className.indexOf('next') ? state.next() : state.previous(); searchInput.focus(); collapseAll(root); showCurrent(state); }) }); addEventListener(root, 'keydown', function (e) { var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className); if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) { /* F3 or CMD/CTRL + F */ if (70 === e.keyCode && document.activeElement === searchInput) { /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */ return; } e.preventDefault(); search.className = search.className.replace(/\bsf-dump-search-hidden\b/, ''); searchInput.focus(); } else if (isSearchActive) { if (27 === e.keyCode) { /* ESC key */ search.className += ' sf-dump-search-hidden'; e.preventDefault(); resetHighlightedNodes(root); searchInput.value = ''; } else if ( (isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) { e.preventDefault(); e.shiftKey ? state.previous() : state.next(); collapseAll(root); showCurrent(state); } } }); } if (0 >= options.maxStringLength) { return; } try { elt = root.querySelectorAll('.sf-dump-str'); len = elt.length; i = 0; t = []; while (i < len) t.push(elt[i++]); len = t.length; for (i = 0; i < len; ++i) { elt = t[i]; s = elt.innerText || elt.textContent; x = s.length - options.maxStringLength; if (0 < x) { h = elt.innerHTML; elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options.maxStringLength); elt.className += ' sf-dump-str-collapse'; elt.innerHTML = '<span class=sf-dump-str-collapse>'+h+'<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span>'+ '<span class=sf-dump-str-expand>'+elt.innerHTML+'<a class="sf-dump-ref sf-dump-str-toggle" title="'+x+' remaining characters"> ▶</a></span>'; } } } catch (e) { } }; })(document); </script><style> .phpdebugbar pre.sf-dump { display: block; white-space: pre; padding: 5px; overflow: initial !important; } .phpdebugbar pre.sf-dump:after { content: ""; visibility: hidden; display: block; height: 0; clear: both; } .phpdebugbar pre.sf-dump span { display: inline; } .phpdebugbar pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; color: inherit; } .phpdebugbar pre.sf-dump img { max-width: 50em; max-height: 50em; margin: .5em 0 0 0; padding: 0; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis { display: inline-block; overflow: visible; text-overflow: ellipsis; max-width: 5em; white-space: nowrap; overflow: hidden; vertical-align: top; } .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis { max-width: none; } .phpdebugbar pre.sf-dump code { display:inline; padding:0; background:none; } .sf-dump-public.sf-dump-highlight, .sf-dump-protected.sf-dump-highlight, .sf-dump-private.sf-dump-highlight, .sf-dump-str.sf-dump-highlight, .sf-dump-key.sf-dump-highlight { background: rgba(111, 172, 204, 0.3); border: 1px solid #7DA0B1; border-radius: 3px; } .sf-dump-public.sf-dump-highlight-active, .sf-dump-protected.sf-dump-highlight-active, .sf-dump-private.sf-dump-highlight-active, .sf-dump-str.sf-dump-highlight-active, .sf-dump-key.sf-dump-highlight-active { background: rgba(253, 175, 0, 0.4); border: 1px solid #ffa500; border-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-hidden { display: none !important; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper { font-size: 0; white-space: nowrap; margin-bottom: 5px; display: flex; position: -webkit-sticky; position: sticky; top: 5px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > * { vertical-align: top; box-sizing: border-box; height: 21px; font-weight: normal; border-radius: 0; background: #FFF; color: #757575; border: 1px solid #BBB; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > input.sf-dump-search-input { padding: 3px; height: 21px; font-size: 12px; border-right: none; border-top-left-radius: 3px; border-bottom-left-radius: 3px; color: #000; min-width: 15px; width: 100%; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous { background: #F2F2F2; outline: none; border-left: none; font-size: 0; line-height: 0; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next { border-top-right-radius: 3px; border-bottom-right-radius: 3px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-next > svg, .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-input-previous > svg { pointer-events: none; width: 12px; height: 12px; } .phpdebugbar pre.sf-dump .sf-dump-search-wrapper > .sf-dump-search-count { display: inline-block; padding: 0 5px; margin: 0; border-left: none; line-height: 21px; font-size: 12px; }.phpdebugbar pre.sf-dump, .phpdebugbar pre.sf-dump .sf-dump-default{word-wrap: break-word; white-space: pre-wrap; word-break: normal}.phpdebugbar pre.sf-dump .sf-dump-num{font-weight:bold; color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-const{font-weight:bold}.phpdebugbar pre.sf-dump .sf-dump-str{font-weight:bold; color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-note{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ref{color:#7B7B7B}.phpdebugbar pre.sf-dump .sf-dump-public{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-protected{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-private{color:#000000}.phpdebugbar pre.sf-dump .sf-dump-meta{color:#B729D9}.phpdebugbar pre.sf-dump .sf-dump-key{color:#3A9B26}.phpdebugbar pre.sf-dump .sf-dump-index{color:#1299DA}.phpdebugbar pre.sf-dump .sf-dump-ellipsis{color:#A0A000}.phpdebugbar pre.sf-dump .sf-dump-ns{user-select:none;}.phpdebugbar pre.sf-dump .sf-dump-ellipsis-note{color:#1299DA}</style>
</head>
    <body class="font-sans antialiased">
        <div x-data="{&quot;show&quot;:true,&quot;style&quot;:&quot;success&quot;,&quot;message&quot;:null}"
            :class="{ 'bg-indigo-500': style == 'success', 'bg-red-700': style == 'danger', 'bg-gray-500': style != 'success' && style != 'danger' }"
            style="display: none;"
            x-show="show && message"
            x-init="
                document.addEventListener('banner-message', event => {
                    style = event.detail.style;
                    message = event.detail.message;
                    show = true;
                });
            ">
    <div class="max-w-screen-xl mx-auto py-2 px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between flex-wrap">
            <div class="w-0 flex-1 flex items-center min-w-0">
                <span class="flex p-2 rounded-lg" :class="{ 'bg-indigo-600': style == 'success', 'bg-red-600': style == 'danger' }">
                    <svg x-show="style == 'success'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <svg x-show="style == 'danger'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>
                    <svg x-show="style != 'success' && style != 'danger'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                </span>

                <p class="ml-3 font-medium text-sm text-white truncate" x-text="message"></p>
            </div>

            <div class="shrink-0 sm:ml-3">
                <button
                    type="button"
                    class="-mr-1 flex p-2 rounded-md focus:outline-none sm:-mr-2 transition"
                    :class="{ 'hover:bg-indigo-600 focus:bg-indigo-600': style == 'success', 'hover:bg-red-600 focus:bg-red-600': style == 'danger' }"
                    aria-label="Dismiss"
                    x-on:click="show = false">
                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

        <div class="min-h-screen bg-gray-100">
            <nav wire:id="27X84Q1zQ4M99NRbFx9a" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;27X84Q1zQ4M99NRbFx9a&quot;,&quot;name&quot;:&quot;navigation-menu&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;refresh-navigation-menu&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;26fe741c&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;720fbf361c0ad919500e90a0e3c6603b09fcff0527b535218e00a75bf1ed3eb5&quot;}}" x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="http://127.0.0.1:8001/dashboard">
                        Taskify

                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" href="http://127.0.0.1:8001/dashboard">
    Dashboard
</a>

                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" href="http://127.0.0.1:8001/todo">
    To-Do List
</a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        admin

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-0 "
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                Manage Account
                            </div>

                            <a class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="http://127.0.0.1:8001/user/profile">Profile</a>


                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="http://127.0.0.1:8001/logout" x-data>
                                <input type="hidden" name="_token" value="svLptZODvy6vaenJMQQNJ6GIu0EUQnT5limeC14k">
                                <a class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="http://127.0.0.1:8001/logout" @click.prevent="$root.submit();">Log Out</a>
                            </form>
        </div>
    </div>
</div>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="http://127.0.0.1:8001/dashboard">
    Dashboard
</a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">

                <div>
                    <div class="font-medium text-base text-gray-800">admin</div>
                    <div class="font-medium text-sm text-gray-500">admin@example.com</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <a class="block w-full pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-left text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out" href="http://127.0.0.1:8001/user/profile">
    Profile
</a>


                <!-- Authentication -->
                <form method="POST" action="http://127.0.0.1:8001/logout" x-data>
                    <input type="hidden" name="_token" value="svLptZODvy6vaenJMQQNJ6GIu0EUQnT5limeC14k">
                    <a class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="http://127.0.0.1:8001/logout" @click.prevent="$root.submit();">
    Log Out
</a>
                </form>

                <!-- Team Management -->
                            </div>
        </div>
    </div>
</nav>

<!-- Livewire Component wire-end:27X84Q1zQ4M99NRbFx9a -->
            <!-- Page Heading -->

            <!-- Page Content -->
            <main>
                <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                            <div wire:id="HR5EdYMeSLxqvqvkByZg" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;HR5EdYMeSLxqvqvkByZg&quot;,&quot;name&quot;:&quot;profile.update-profile-information-form&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;faf0ee8a&quot;,&quot;data&quot;:{&quot;state&quot;:{&quot;id&quot;:5,&quot;name&quot;:&quot;admin&quot;,&quot;email&quot;:&quot;admin@example.com&quot;,&quot;email_verified_at&quot;:null,&quot;two_factor_confirmed_at&quot;:null,&quot;current_team_id&quot;:null,&quot;profile_photo_path&quot;:null,&quot;created_at&quot;:&quot;2023-05-21T08:36:43.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-05-21T08:36:43.000000Z&quot;,&quot;profile_photo_url&quot;:&quot;https:\/\/ui-avatars.com\/api\/?name=a&amp;color=7F9CF5&amp;background=EBF4FF&quot;},&quot;photo&quot;:null,&quot;verificationLinkSent&quot;:false},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;e5875db29f61f3e4a1c56b76a9aaf8c70b3327aacb67dc1568240ad3f56ea75c&quot;}}" class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Profile Information</h3>

        <p class="mt-1 text-sm text-gray-600">
            Update your account&#039;s profile information and email address.
        </p>
    </div>

    <div class="px-4 sm:px-0">

    </div>
</div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="updateProfileInformation">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                <div class="grid grid-cols-6 gap-6">
                    <!-- Profile Photo -->

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="name">
    Name
</label>
            <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="name" type="text" wire:model.defer="state.name" autocomplete="name">
                    </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="email">
    Email
</label>
            <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="email" type="email" wire:model.defer="state.email" autocomplete="username">

                    </div>
                </div>
            </div>

                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <div x-data="{ shown: false, timeout: null }"
    x-init="window.livewire.find('HR5EdYMeSLxqvqvkByZg').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
    x-show.transition.out.opacity.duration.1500ms="shown"
    x-transition:leave.opacity.duration.1500ms
    style="display: none;"
    class="text-sm text-gray-600 mr-3">
    Saved.
</div>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" wire:loading.attr="disabled" wire:target="photo">
    Save
</button>
                </div>
                    </form>
    </div>
</div>

<!-- Livewire Component wire-end:HR5EdYMeSLxqvqvkByZg -->
                <div class="hidden sm:block">
    <div class="py-8">
        <div class="border-t border-gray-200"></div>
    </div>
</div>

                            <div class="mt-10 sm:mt-0">
                    <div wire:id="SmBf8mML24ZK41h3pTnN" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;SmBf8mML24ZK41h3pTnN&quot;,&quot;name&quot;:&quot;profile.update-password-form&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;48b67d62&quot;,&quot;data&quot;:{&quot;state&quot;:{&quot;current_password&quot;:&quot;&quot;,&quot;password&quot;:&quot;&quot;,&quot;password_confirmation&quot;:&quot;&quot;}},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;f2c78aecc2a387e61f2af6ce12515f2240cd44831cdbdc05b0b1861a913b2dda&quot;}}" class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Update Password</h3>

        <p class="mt-1 text-sm text-gray-600">
            Ensure your account is using a long, random password to stay secure.
        </p>
    </div>

    <div class="px-4 sm:px-0">

    </div>
</div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="updatePassword">
            <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="current_password">
    Current Password
</label>
            <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="current_password" type="password" wire:model.defer="state.current_password" autocomplete="current-password">
                    </div>

        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="password">
    New Password
</label>
            <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="password" type="password" wire:model.defer="state.password" autocomplete="new-password">
                    </div>

        <div class="col-span-6 sm:col-span-4">
            <label class="block font-medium text-sm text-gray-700" for="password_confirmation">
    Confirm Password
</label>
            <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" id="password_confirmation" type="password" wire:model.defer="state.password_confirmation" autocomplete="new-password">
                    </div>
                </div>
            </div>

                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    <div x-data="{ shown: false, timeout: null }"
    x-init="window.livewire.find('SmBf8mML24ZK41h3pTnN').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
    x-show.transition.out.opacity.duration.1500ms="shown"
    x-transition:leave.opacity.duration.1500ms
    style="display: none;"
    class="text-sm text-gray-600 mr-3">
    Saved.
</div>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
    Save
</button>
                </div>
                    </form>
    </div>
</div>

<!-- Livewire Component wire-end:SmBf8mML24ZK41h3pTnN -->                </div>

                <div class="hidden sm:block">
    <div class="py-8">
        <div class="border-t border-gray-200"></div>
    </div>
</div>

                            <div class="mt-10 sm:mt-0">
                    <div wire:id="JfqYHz7EWNcsAbAfP5vs" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;JfqYHz7EWNcsAbAfP5vs&quot;,&quot;name&quot;:&quot;profile.two-factor-authentication-form&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;34bbccad&quot;,&quot;data&quot;:{&quot;showingQrCode&quot;:false,&quot;showingConfirmation&quot;:false,&quot;showingRecoveryCodes&quot;:false,&quot;code&quot;:null,&quot;confirmingPassword&quot;:false,&quot;confirmableId&quot;:null,&quot;confirmablePassword&quot;:&quot;&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;6740ed8fe919e42b67b0fd67b91f56b52ee6dd0782ecd9f3bf6b45b4c29b16d2&quot;}}" class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Two Factor Authentication</h3>

        <p class="mt-1 text-sm text-gray-600">
            Add additional security to your account using two factor authentication.
        </p>
    </div>

    <div class="px-4 sm:px-0">

    </div>
</div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
            <h3 class="text-lg font-medium text-gray-900">
                            You have not enabled two factor authentication.
                    </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone&#039;s Google Authenticator application.
            </p>
        </div>


        <div class="mt-5">
                            <span
    wire:then="enableTwoFactorAuthentication"
    x-data
    x-ref="span"
    x-on:click="$wire.startConfirmingPassword('ab2d1de5297198533ed96f794eb99eac')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === 'ab2d1de5297198533ed96f794eb99eac' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);"
>
    <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" wire:loading.attr="disabled">
    Enable
</button>
</span>

<div
    x-data="{ show: window.Livewire.find('JfqYHz7EWNcsAbAfP5vs').entangle('confirmingPassword').defer }"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-show="show"
    id="506a8cb247bad8f18658bdb3f794fabc"
    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: none;"
>
    <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div x-show="show" class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto"
                    x-trap.inert.noscroll="show"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        <div class="px-6 py-4">
        <div class="text-lg font-medium text-gray-900">
            Confirm Password
        </div>

        <div class="mt-4 text-sm text-gray-600">
            For your security, please confirm your password to continue.

        <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
            <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-3/4" type="password" placeholder="Password" autocomplete="current-password" x-ref="confirmable_password" wire:model.defer="confirmablePassword" wire:keydown.enter="confirmPassword">

                    </div>
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
    Cancel
</button>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-3" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
    Confirm
</button>
    </div>
    </div>
</div>
                    </div>
        </div>
    </div>
</div>

<!-- Livewire Component wire-end:JfqYHz7EWNcsAbAfP5vs -->                </div>

                <div class="hidden sm:block">
    <div class="py-8">
        <div class="border-t border-gray-200"></div>
    </div>
</div>

            <div class="mt-10 sm:mt-0">
                <div wire:id="64wodCZtezwHsZR9JWzv" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;64wodCZtezwHsZR9JWzv&quot;,&quot;name&quot;:&quot;profile.logout-other-browser-sessions-form&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;5c1eda53&quot;,&quot;data&quot;:{&quot;confirmingLogout&quot;:false,&quot;password&quot;:&quot;&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;5989af667f61fa74b7b070c34e7310d516ff0e80c33fedc71127128b0859fb15&quot;}}" class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Browser Sessions</h3>

        <p class="mt-1 text-sm text-gray-600">
            Manage and log out your active sessions on other browsers and devices.
        </p>
    </div>

    <div class="px-4 sm:px-0">

    </div>
</div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl text-sm text-gray-600">
            If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.
        </div>

                    <div class="mt-5 space-y-6">
                <!-- Other Browser Sessions -->
                                    <div class="flex items-center">
                        <div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                                </svg>
                                                    </div>

                        <div class="ml-3">
                            <div class="text-sm text-gray-600">
                                Linux - Chrome
                            </div>

                            <div>
                                <div class="text-xs text-gray-500">
                                    127.0.0.1,

                                                                            <span class="text-green-500 font-semibold">This device</span>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                            </div>

        <div class="flex items-center mt-5">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" wire:click="confirmLogout" wire:loading.attr="disabled">
    Log Out Other Browser Sessions
</button>

            <div x-data="{ shown: false, timeout: null }"
    x-init="window.livewire.find('64wodCZtezwHsZR9JWzv').on('loggedOut', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
    x-show.transition.out.opacity.duration.1500ms="shown"
    x-transition:leave.opacity.duration.1500ms
    style="display: none;"
    class="text-sm text-gray-600 ml-3">
    Done.
</div>
        </div>

        <!-- Log Out Other Devices Confirmation Modal -->
        <div
    x-data="{ show: window.Livewire.find('64wodCZtezwHsZR9JWzv').entangle('confirmingLogout').defer }"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-show="show"
    id="7bfef3bbc87b550e8528db202ce06cfb"
    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: none;"
>
    <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div x-show="show" class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto"
                    x-trap.inert.noscroll="show"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        <div class="px-6 py-4">
        <div class="text-lg font-medium text-gray-900">
            Log Out Other Browser Sessions
        </div>

        <div class="mt-4 text-sm text-gray-600">
            Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.

                <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
                    <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-3/4" type="password" autocomplete="current-password" placeholder="Password" x-ref="password" wire:model.defer="password" wire:keydown.enter="logoutOtherBrowserSessions">

                                    </div>
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled">
    Cancel
</button>

                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-3" wire:click="logoutOtherBrowserSessions" wire:loading.attr="disabled">
    Log Out Other Browser Sessions
</button>
    </div>
    </div>
</div>
        </div>
    </div>
</div>

<!-- Livewire Component wire-end:64wodCZtezwHsZR9JWzv -->            </div>

                            <div class="hidden sm:block">
    <div class="py-8">
        <div class="border-t border-gray-200"></div>
    </div>
</div>

                <div class="mt-10 sm:mt-0">
                    <div wire:id="H79b4GeoSI4h4yxRMYK7" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;H79b4GeoSI4h4yxRMYK7&quot;,&quot;name&quot;:&quot;profile.delete-user-form&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;29622368&quot;,&quot;data&quot;:{&quot;confirmingUserDeletion&quot;:false,&quot;password&quot;:&quot;&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;b0e083dafc388de08849ac0891f353471c0a591016391f4609b612346d817fa0&quot;}}" class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1 flex justify-between">
    <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900">Delete Account</h3>

        <p class="mt-1 text-sm text-gray-600">
            Permanently delete your account.
        </p>
    </div>

    <div class="px-4 sm:px-0">

    </div>
</div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl text-sm text-gray-600">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
        </div>

        <div class="mt-5">
            <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150" wire:click="confirmUserDeletion" wire:loading.attr="disabled">
    Delete Account
</button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <div
    x-data="{ show: window.Livewire.find('H79b4GeoSI4h4yxRMYK7').entangle('confirmingUserDeletion').defer }"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    x-show="show"
    id="36ac91a8122577c7b197539ebb1a5123"
    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: none;"
>
    <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div x-show="show" class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto"
                    x-trap.inert.noscroll="show"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        <div class="px-6 py-4">
        <div class="text-lg font-medium text-gray-900">
            Delete Account
        </div>

        <div class="mt-4 text-sm text-gray-600">
            Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <input  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-3/4" type="password" autocomplete="current-password" placeholder="Password" x-ref="password" wire:model.defer="password" wire:keydown.enter="deleteUser">

                                    </div>
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 text-right">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
    Cancel
</button>

                <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
    Delete Account
</button>
    </div>
    </div>
</div>
        </div>
    </div>
</div>

<!-- Livewire Component wire-end:H79b4GeoSI4h4yxRMYK7 -->                </div>
                    </div>
    </div>
            </main>
        </div>


        <!-- Livewire Scripts -->

<script src="/livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false" data-turbolinks-eval="false" ></script>
<script data-turbo-eval="false" data-turbolinks-eval="false" >
    if (window.livewire) {
	    console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
	}

    window.livewire = new Livewire();
    window.livewire.devTools(true);
    window.Livewire = window.livewire;
    window.livewire_app_url = '';
    window.livewire_token = 'svLptZODvy6vaenJMQQNJ6GIu0EUQnT5limeC14k';

	/* Make sure Livewire loads first. */
	if (window.Alpine) {
	    /* Defer showing the warning so it doesn't get buried under downstream errors. */
	    document.addEventListener("DOMContentLoaded", function () {
	        setTimeout(function() {
	            console.warn("Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\\n\\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js")
	        })
	    });
	}

	/* Make Alpine wait until Livewire is finished rendering to do its thing. */
    window.deferLoadingAlpine = function (callback) {
        window.addEventListener('livewire:load', function () {
            callback();
        });
    };

    let started = false;

    window.addEventListener('alpine:initializing', function () {
        if (! started) {
            window.livewire.start();

            started = true;
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
        if (! started) {
            window.livewire.start();

            started = true;
        }
    });
</script>
    <script type="text/javascript">
var phpdebugbar = new PhpDebugBar.DebugBar();
phpdebugbar.addIndicator("php_version", new PhpDebugBar.DebugBar.Indicator({"icon":"code","tooltip":"PHP Version"}), "right");
phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Messages", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({"icon":"clock-o","tooltip":"Request Duration"}), "right");
phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({"icon":"tasks","title":"Timeline", "widget": new PhpDebugBar.Widgets.TimelineWidget()}));
phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({"icon":"cogs","tooltip":"Memory Usage"}), "right");
phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({"icon":"bug","title":"Exceptions", "widget": new PhpDebugBar.Widgets.ExceptionsWidget()}));
phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({"icon":"leaf","title":"Views", "widget": new PhpDebugBar.Widgets.LaravelViewTemplatesWidget()}));
phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({"icon":"share","title":"Route", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({"icon":"share","tooltip":"Route"}), "right");
phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({"icon":"database","title":"Queries", "widget": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()}));
phpdebugbar.addTab("models", new PhpDebugBar.DebugBar.Tab({"icon":"cubes","title":"Models", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.addTab("livewire", new PhpDebugBar.DebugBar.Tab({"icon":"bolt","title":"Livewire", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addTab("gate", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Gate", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({"icon":"archive","title":"Session", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({"icon":"tags","title":"Request", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
phpdebugbar.setDataMap({
"php_version": ["php.version", ],
"messages": ["messages.messages", []],
"messages:badge": ["messages.count", null],
"time": ["time.duration_str", '0ms'],
"timeline": ["time", {}],
"memory": ["memory.peak_usage_str", '0B'],
"exceptions": ["exceptions.exceptions", []],
"exceptions:badge": ["exceptions.count", null],
"views": ["views", []],
"views:badge": ["views.nb_templates", 0],
"route": ["route", {}],
"currentroute": ["route.uri", ],
"queries": ["queries", []],
"queries:badge": ["queries.nb_statements", 0],
"models": ["models.data", {}],
"models:badge": ["models.count", 0],
"livewire": ["livewire.data", {}],
"livewire:badge": ["livewire.count", 0],
"gate": ["gate.messages", []],
"gate:badge": ["gate.count", null],
"session": ["session", {}],
"request": ["request", {}]
});
phpdebugbar.restoreState();
phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);
phpdebugbar.ajaxHandler.bindToFetch();
phpdebugbar.ajaxHandler.bindToXHR();
phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({"url":"http:\/\/127.0.0.1:8001\/_debugbar\/open"}));
phpdebugbar.addDataSet({"__meta":{"id":"Xa8058606051045bda8f38ac8089bfbdc","datetime":"2023-05-21 08:37:22","utime":1684658242.537332,"method":"GET","uri":"\/user\/profile","ip":"127.0.0.1"},"php":{"version":"8.2.6","interface":"cli-server"},"messages":{"count":0,"messages":[]},"time":{"start":1684658242.373719,"end":1684658242.537346,"duration":0.16362690925598145,"duration_str":"164ms","measures":[{"label":"Booting","start":1684658242.373719,"relative_start":0,"end":1684658242.459202,"relative_end":1684658242.459202,"duration":0.08548307418823242,"duration_str":"85.48ms","params":[],"collector":null},{"label":"Application","start":1684658242.459347,"relative_start":0.08562803268432617,"end":1684658242.537348,"relative_end":2.1457672119140625e-6,"duration":0.07800102233886719,"duration_str":"78ms","params":[],"collector":null}]},"memory":{"peak_usage":24527088,"peak_usage_str":"23MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":73,"templates":[{"name":"profile.show (resources\/views\/profile\/show.blade.php)","param_count":2,"params":["request","user"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/profile\/show.blade.php&line=0"},{"name":"profile.update-profile-information-form (resources\/views\/profile\/update-profile-information-form.blade.php)","param_count":5,"params":["errors","_instance","state","photo","verificationLinkSent"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/profile\/update-profile-information-form.blade.php&line=0"},{"name":"components.label (resources\/views\/components\/label.blade.php)","param_count":5,"params":["for","value","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/label.blade.php&line=0"},{"name":"components.input (resources\/views\/components\/input.blade.php)","param_count":8,"params":["id","type","class","wire:model.defer","autocomplete","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input.blade.php&line=0"},{"name":"components.input-error (resources\/views\/components\/input-error.blade.php)","param_count":5,"params":["for","class","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input-error.blade.php&line=0"},{"name":"components.label (resources\/views\/components\/label.blade.php)","param_count":5,"params":["for","value","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/label.blade.php&line=0"},{"name":"components.input (resources\/views\/components\/input.blade.php)","param_count":8,"params":["id","type","class","wire:model.defer","autocomplete","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input.blade.php&line=0"},{"name":"components.input-error (resources\/views\/components\/input-error.blade.php)","param_count":5,"params":["for","class","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input-error.blade.php&line=0"},{"name":"components.action-message (resources\/views\/components\/action-message.blade.php)","param_count":5,"params":["class","on","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/action-message.blade.php&line=0"},{"name":"components.button (resources\/views\/components\/button.blade.php)","param_count":5,"params":["wire:loading.attr","wire:target","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/button.blade.php&line=0"},{"name":"components.form-section (resources\/views\/components\/form-section.blade.php)","param_count":8,"params":["submit","attributes","slot","title","description","form","actions","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/form-section.blade.php&line=0"},{"name":"components.section-title (resources\/views\/components\/section-title.blade.php)","param_count":5,"params":["attributes","slot","title","description","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/section-title.blade.php&line=0"},{"name":"components.section-border (resources\/views\/components\/section-border.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/section-border.blade.php&line=0"},{"name":"profile.update-password-form (resources\/views\/profile\/update-password-form.blade.php)","param_count":3,"params":["errors","_instance","state"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/profile\/update-password-form.blade.php&line=0"},{"name":"components.label (resources\/views\/components\/label.blade.php)","param_count":5,"params":["for","value","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/label.blade.php&line=0"},{"name":"components.input (resources\/views\/components\/input.blade.php)","param_count":8,"params":["id","type","class","wire:model.defer","autocomplete","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input.blade.php&line=0"},{"name":"components.input-error (resources\/views\/components\/input-error.blade.php)","param_count":5,"params":["for","class","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input-error.blade.php&line=0"},{"name":"components.label (resources\/views\/components\/label.blade.php)","param_count":5,"params":["for","value","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/label.blade.php&line=0"},{"name":"components.input (resources\/views\/components\/input.blade.php)","param_count":8,"params":["id","type","class","wire:model.defer","autocomplete","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input.blade.php&line=0"},{"name":"components.input-error (resources\/views\/components\/input-error.blade.php)","param_count":5,"params":["for","class","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input-error.blade.php&line=0"},{"name":"components.label (resources\/views\/components\/label.blade.php)","param_count":5,"params":["for","value","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/label.blade.php&line=0"},{"name":"components.input (resources\/views\/components\/input.blade.php)","param_count":8,"params":["id","type","class","wire:model.defer","autocomplete","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input.blade.php&line=0"},{"name":"components.input-error (resources\/views\/components\/input-error.blade.php)","param_count":5,"params":["for","class","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input-error.blade.php&line=0"},{"name":"components.action-message (resources\/views\/components\/action-message.blade.php)","param_count":5,"params":["class","on","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/action-message.blade.php&line=0"},{"name":"components.button (resources\/views\/components\/button.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/button.blade.php&line=0"},{"name":"components.form-section (resources\/views\/components\/form-section.blade.php)","param_count":8,"params":["submit","attributes","slot","title","description","form","actions","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/form-section.blade.php&line=0"},{"name":"components.section-title (resources\/views\/components\/section-title.blade.php)","param_count":5,"params":["attributes","slot","title","description","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/section-title.blade.php&line=0"},{"name":"components.section-border (resources\/views\/components\/section-border.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/section-border.blade.php&line=0"},{"name":"profile.two-factor-authentication-form (resources\/views\/profile\/two-factor-authentication-form.blade.php)","param_count":9,"params":["errors","_instance","showingQrCode","showingConfirmation","showingRecoveryCodes","code","confirmingPassword","confirmableId","confirmablePassword"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/profile\/two-factor-authentication-form.blade.php&line=0"},{"name":"components.button (resources\/views\/components\/button.blade.php)","param_count":5,"params":["type","wire:loading.attr","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/button.blade.php&line=0"},{"name":"components.confirms-password (resources\/views\/components\/confirms-password.blade.php)","param_count":4,"params":["wire:then","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/confirms-password.blade.php&line=0"},{"name":"components.input (resources\/views\/components\/input.blade.php)","param_count":10,"params":["type","class","placeholder","autocomplete","xRef","wire:model.defer","wire:keydown.enter","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input.blade.php&line=0"},{"name":"components.input-error (resources\/views\/components\/input-error.blade.php)","param_count":5,"params":["for","class","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input-error.blade.php&line=0"},{"name":"components.secondary-button (resources\/views\/components\/secondary-button.blade.php)","param_count":5,"params":["wire:click","wire:loading.attr","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/secondary-button.blade.php&line=0"},{"name":"components.button (resources\/views\/components\/button.blade.php)","param_count":7,"params":["class","dusk","wire:click","wire:loading.attr","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/button.blade.php&line=0"},{"name":"components.dialog-modal (resources\/views\/components\/dialog-modal.blade.php)","param_count":7,"params":["wire:model","attributes","slot","title","content","footer","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/dialog-modal.blade.php&line=0"},{"name":"components.modal (resources\/views\/components\/modal.blade.php)","param_count":6,"params":["wire:model","id","maxWidth","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/modal.blade.php&line=0"},{"name":"components.action-section (resources\/views\/components\/action-section.blade.php)","param_count":6,"params":["attributes","slot","title","description","content","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/action-section.blade.php&line=0"},{"name":"components.section-title (resources\/views\/components\/section-title.blade.php)","param_count":5,"params":["attributes","slot","title","description","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/section-title.blade.php&line=0"},{"name":"components.section-border (resources\/views\/components\/section-border.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/section-border.blade.php&line=0"},{"name":"profile.logout-other-browser-sessions-form (resources\/views\/profile\/logout-other-browser-sessions-form.blade.php)","param_count":4,"params":["errors","_instance","confirmingLogout","password"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/profile\/logout-other-browser-sessions-form.blade.php&line=0"},{"name":"components.button (resources\/views\/components\/button.blade.php)","param_count":5,"params":["wire:click","wire:loading.attr","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/button.blade.php&line=0"},{"name":"components.action-message (resources\/views\/components\/action-message.blade.php)","param_count":5,"params":["class","on","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/action-message.blade.php&line=0"},{"name":"components.input (resources\/views\/components\/input.blade.php)","param_count":10,"params":["type","class","autocomplete","placeholder","xRef","wire:model.defer","wire:keydown.enter","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input.blade.php&line=0"},{"name":"components.input-error (resources\/views\/components\/input-error.blade.php)","param_count":5,"params":["for","class","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input-error.blade.php&line=0"},{"name":"components.secondary-button (resources\/views\/components\/secondary-button.blade.php)","param_count":5,"params":["wire:click","wire:loading.attr","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/secondary-button.blade.php&line=0"},{"name":"components.button (resources\/views\/components\/button.blade.php)","param_count":6,"params":["class","wire:click","wire:loading.attr","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/button.blade.php&line=0"},{"name":"components.dialog-modal (resources\/views\/components\/dialog-modal.blade.php)","param_count":7,"params":["wire:model","attributes","slot","title","content","footer","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/dialog-modal.blade.php&line=0"},{"name":"components.modal (resources\/views\/components\/modal.blade.php)","param_count":6,"params":["wire:model","id","maxWidth","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/modal.blade.php&line=0"},{"name":"components.action-section (resources\/views\/components\/action-section.blade.php)","param_count":6,"params":["attributes","slot","title","description","content","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/action-section.blade.php&line=0"},{"name":"components.section-title (resources\/views\/components\/section-title.blade.php)","param_count":5,"params":["attributes","slot","title","description","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/section-title.blade.php&line=0"},{"name":"components.section-border (resources\/views\/components\/section-border.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/section-border.blade.php&line=0"},{"name":"profile.delete-user-form (resources\/views\/profile\/delete-user-form.blade.php)","param_count":4,"params":["errors","_instance","confirmingUserDeletion","password"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/profile\/delete-user-form.blade.php&line=0"},{"name":"components.danger-button (resources\/views\/components\/danger-button.blade.php)","param_count":5,"params":["wire:click","wire:loading.attr","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/danger-button.blade.php&line=0"},{"name":"components.input (resources\/views\/components\/input.blade.php)","param_count":10,"params":["type","class","autocomplete","placeholder","xRef","wire:model.defer","wire:keydown.enter","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input.blade.php&line=0"},{"name":"components.input-error (resources\/views\/components\/input-error.blade.php)","param_count":5,"params":["for","class","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/input-error.blade.php&line=0"},{"name":"components.secondary-button (resources\/views\/components\/secondary-button.blade.php)","param_count":5,"params":["wire:click","wire:loading.attr","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/secondary-button.blade.php&line=0"},{"name":"components.danger-button (resources\/views\/components\/danger-button.blade.php)","param_count":6,"params":["class","wire:click","wire:loading.attr","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/danger-button.blade.php&line=0"},{"name":"components.dialog-modal (resources\/views\/components\/dialog-modal.blade.php)","param_count":7,"params":["wire:model","attributes","slot","title","content","footer","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/dialog-modal.blade.php&line=0"},{"name":"components.modal (resources\/views\/components\/modal.blade.php)","param_count":6,"params":["wire:model","id","maxWidth","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/modal.blade.php&line=0"},{"name":"components.action-section (resources\/views\/components\/action-section.blade.php)","param_count":6,"params":["attributes","slot","title","description","content","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/action-section.blade.php&line=0"},{"name":"components.section-title (resources\/views\/components\/section-title.blade.php)","param_count":5,"params":["attributes","slot","title","description","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/section-title.blade.php&line=0"},{"name":"layouts.app (resources\/views\/layouts\/app.blade.php)","param_count":10,"params":["componentName","attributes","resolve","flushCache","forgetFactory","forgetComponentsResolver","resolveComponentsUsing","slot","title","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/layouts\/app.blade.php&line=0"},{"name":"components.banner (resources\/views\/components\/banner.blade.php)","param_count":3,"params":["attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/banner.blade.php&line=0"},{"name":"navigation-menu (resources\/views\/navigation-menu.blade.php)","param_count":2,"params":["errors","_instance"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/navigation-menu.blade.php&line=0"},{"name":"components.nav-link (resources\/views\/components\/nav-link.blade.php)","param_count":5,"params":["href","active","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/nav-link.blade.php&line=0"},{"name":"components.nav-link (resources\/views\/components\/nav-link.blade.php)","param_count":5,"params":["href","active","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/nav-link.blade.php&line=0"},{"name":"components.dropdown-link (resources\/views\/components\/dropdown-link.blade.php)","param_count":4,"params":["href","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/dropdown-link.blade.php&line=0"},{"name":"components.dropdown-link (resources\/views\/components\/dropdown-link.blade.php)","param_count":5,"params":["href","@click.prevent","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/dropdown-link.blade.php&line=0"},{"name":"components.dropdown (resources\/views\/components\/dropdown.blade.php)","param_count":7,"params":["align","width","attributes","slot","trigger","content","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/dropdown.blade.php&line=0"},{"name":"components.responsive-nav-link (resources\/views\/components\/responsive-nav-link.blade.php)","param_count":5,"params":["href","active","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/responsive-nav-link.blade.php&line=0"},{"name":"components.responsive-nav-link (resources\/views\/components\/responsive-nav-link.blade.php)","param_count":5,"params":["href","active","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/responsive-nav-link.blade.php&line=0"},{"name":"components.responsive-nav-link (resources\/views\/components\/responsive-nav-link.blade.php)","param_count":5,"params":["href","@click.prevent","attributes","slot","__laravel_slots"],"type":"blade","editorLink":"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/resources\/views\/components\/responsive-nav-link.blade.php&line=0"}]},"route":{"uri":"GET user\/profile","domain":null,"middleware":"web, auth:sanctum, Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession","controller":"Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show","namespace":"Laravel\\Jetstream\\Http\\Controllers","prefix":"","where":[],"as":"profile.show","file":"<a href=\"phpstorm:\/\/open?file=\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/vendor\/laravel\/jetstream\/src\/Http\/Controllers\/Livewire\/UserProfileController.php&line=16\">vendor\/laravel\/jetstream\/src\/Http\/Controllers\/Livewire\/UserProfileController.php:16-22<\/a>"},"queries":{"nb_statements":5,"nb_failed_statements":0,"accumulated_duration":0.00374,"accumulated_duration_str":"3.74ms","statements":[{"sql":"select * from `sessions` where `id` = 'yx5DxedJjeq2qeTRYu6OW82nBHtXhtK6P5aUBrVn' limit 1","type":"query","params":[],"bindings":["yx5DxedJjeq2qeTRYu6OW82nBHtXhtK6P5aUBrVn"],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","line":97},{"index":15,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","line":113},{"index":16,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","line":101},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","line":85},{"index":18,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php","line":147}],"duration":0.00115,"duration_str":"1.15ms","stmt_id":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php:97","connection":"laraveltodo","start_percent":0,"width_percent":30.749},{"sql":"select * from `users` where `id` = 5 limit 1","type":"query","params":[],"bindings":["5"],"hints":null,"show_copy":false,"backtrace":[{"index":15,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/EloquentUserProvider.php","line":59},{"index":16,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/SessionGuard.php","line":159},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/sanctum\/src\/Guard.php","line":57},{"index":20,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/GuardHelpers.php","line":60},{"index":21,"namespace":"middleware","name":"auth","line":64}],"duration":0.0004,"duration_str":"400\u03bcs","stmt_id":"\/vendor\/laravel\/framework\/src\/Illuminate\/Auth\/EloquentUserProvider.php:59","connection":"laraveltodo","start_percent":30.749,"width_percent":10.695},{"sql":"select * from `sessions` where `user_id` = 5 order by `last_activity` desc","type":"query","params":[],"bindings":["5"],"hints":null,"show_copy":false,"backtrace":[{"index":12,"namespace":null,"name":"\/vendor\/laravel\/jetstream\/src\/Http\/Livewire\/LogoutOtherBrowserSessionsForm.php","line":109},{"index":13,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php","line":36},{"index":14,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php","line":41},{"index":15,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php","line":93},{"index":16,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php","line":35}],"duration":0.00038,"duration_str":"380\u03bcs","stmt_id":"\/vendor\/laravel\/jetstream\/src\/Http\/Livewire\/LogoutOtherBrowserSessionsForm.php:109","connection":"laraveltodo","start_percent":41.444,"width_percent":10.16},{"sql":"update `sessions` set `payload` = 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic3ZMcHRaT0R2eTZ2YWVuSk1RUU5KNkdJdTBFVVFuVDVsaW1lQzE0ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS91c2VyL3Byb2ZpbGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHF2all2SHlRbHNpSE1TQm5jYXhhNi5iRy9RalhvaDEzUE5HQ21PNG8zRmY5VDNtZzZIZkZpIjt9', `last_activity` = 1684658242, `user_id` = 5, `ip_address` = '127.0.0.1', `user_agent` = 'Mozilla\/5.0 (X11; Linux x86_64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/113.0.0.0 Safari\/537.36' where `id` = 'yx5DxedJjeq2qeTRYu6OW82nBHtXhtK6P5aUBrVn'","type":"query","params":[],"bindings":["YTo1OntzOjY6Il90b2tlbiI7czo0MDoic3ZMcHRaT0R2eTZ2YWVuSk1RUU5KNkdJdTBFVVFuVDVsaW1lQzE0ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS91c2VyL3Byb2ZpbGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHF2all2SHlRbHNpSE1TQm5jYXhhNi5iRy9RalhvaDEzUE5HQ21PNG8zRmY5VDNtZzZIZkZpIjt9","1684658242","5","127.0.0.1","Mozilla\/5.0 (X11; Linux x86_64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/113.0.0.0 Safari\/537.36","yx5DxedJjeq2qeTRYu6OW82nBHtXhtK6P5aUBrVn"],"hints":null,"show_copy":false,"backtrace":[{"index":10,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","line":173},{"index":11,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","line":140},{"index":12,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","line":172},{"index":13,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php","line":238},{"index":14,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Middleware\/StartSession.php","line":130}],"duration":0.00148,"duration_str":"1.48ms","stmt_id":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php:173","connection":"laraveltodo","start_percent":51.604,"width_percent":39.572},{"sql":"select * from `sessions` where `id` = 'yx5DxedJjeq2qeTRYu6OW82nBHtXhtK6P5aUBrVn' limit 1","type":"query","params":[],"bindings":["yx5DxedJjeq2qeTRYu6OW82nBHtXhtK6P5aUBrVn"],"hints":null,"show_copy":false,"backtrace":[{"index":14,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php","line":97},{"index":15,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","line":113},{"index":16,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","line":101},{"index":17,"namespace":null,"name":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/Store.php","line":85},{"index":20,"namespace":null,"name":"\/vendor\/maximebf\/debugbar\/src\/DebugBar\/DebugBar.php","line":446}],"duration":0.00033,"duration_str":"330\u03bcs","stmt_id":"\/vendor\/laravel\/framework\/src\/Illuminate\/Session\/DatabaseSessionHandler.php:97","connection":"laraveltodo","start_percent":91.176,"width_percent":8.824}]},"models":{"data":{"App\\Models\\User":1},"count":1},"livewire":{"data":{"laravel.jetstream.http.livewire.update-profile-information-form #HR5EdYMeSLxqvqvkByZg":"array:5 [\n  \"data\" => array:3 [\n    \"state\" => array:10 [\n      \"id\" => 5\n      \"name\" => \"admin\"\n      \"email\" => \"admin@example.com\"\n      \"email_verified_at\" => null\n      \"two_factor_confirmed_at\" => null\n      \"current_team_id\" => null\n      \"profile_photo_path\" => null\n      \"created_at\" => \"2023-05-21T08:36:43.000000Z\"\n      \"updated_at\" => \"2023-05-21T08:36:43.000000Z\"\n      \"profile_photo_url\" => \"https:\/\/ui-avatars.com\/api\/?name=a&color=7F9CF5&background=EBF4FF\"\n    ]\n    \"photo\" => null\n    \"verificationLinkSent\" => false\n  ]\n  \"name\" => \"laravel.jetstream.http.livewire.update-profile-information-form\"\n  \"view\" => \"profile.update-profile-information-form\"\n  \"component\" => \"Laravel\\Jetstream\\Http\\Livewire\\UpdateProfileInformationForm\"\n  \"id\" => \"HR5EdYMeSLxqvqvkByZg\"\n]","laravel.jetstream.http.livewire.update-password-form #SmBf8mML24ZK41h3pTnN":"array:5 [\n  \"data\" => array:1 [\n    \"state\" => array:3 [\n      \"current_password\" => \"\"\n      \"password\" => \"\"\n      \"password_confirmation\" => \"\"\n    ]\n  ]\n  \"name\" => \"laravel.jetstream.http.livewire.update-password-form\"\n  \"view\" => \"profile.update-password-form\"\n  \"component\" => \"Laravel\\Jetstream\\Http\\Livewire\\UpdatePasswordForm\"\n  \"id\" => \"SmBf8mML24ZK41h3pTnN\"\n]","laravel.jetstream.http.livewire.two-factor-authentication-form #JfqYHz7EWNcsAbAfP5vs":"array:5 [\n  \"data\" => array:7 [\n    \"showingQrCode\" => false\n    \"showingConfirmation\" => false\n    \"showingRecoveryCodes\" => false\n    \"code\" => null\n    \"confirmingPassword\" => false\n    \"confirmableId\" => null\n    \"confirmablePassword\" => \"\"\n  ]\n  \"name\" => \"laravel.jetstream.http.livewire.two-factor-authentication-form\"\n  \"view\" => \"profile.two-factor-authentication-form\"\n  \"component\" => \"Laravel\\Jetstream\\Http\\Livewire\\TwoFactorAuthenticationForm\"\n  \"id\" => \"JfqYHz7EWNcsAbAfP5vs\"\n]","laravel.jetstream.http.livewire.logout-other-browser-sessions-form #64wodCZtezwHsZR9JWzv":"array:5 [\n  \"data\" => array:2 [\n    \"confirmingLogout\" => false\n    \"password\" => \"\"\n  ]\n  \"name\" => \"laravel.jetstream.http.livewire.logout-other-browser-sessions-form\"\n  \"view\" => \"profile.logout-other-browser-sessions-form\"\n  \"component\" => \"Laravel\\Jetstream\\Http\\Livewire\\LogoutOtherBrowserSessionsForm\"\n  \"id\" => \"64wodCZtezwHsZR9JWzv\"\n]","laravel.jetstream.http.livewire.delete-user-form #H79b4GeoSI4h4yxRMYK7":"array:5 [\n  \"data\" => array:2 [\n    \"confirmingUserDeletion\" => false\n    \"password\" => \"\"\n  ]\n  \"name\" => \"laravel.jetstream.http.livewire.delete-user-form\"\n  \"view\" => \"profile.delete-user-form\"\n  \"component\" => \"Laravel\\Jetstream\\Http\\Livewire\\DeleteUserForm\"\n  \"id\" => \"H79b4GeoSI4h4yxRMYK7\"\n]","laravel.jetstream.http.livewire.navigation-menu #27X84Q1zQ4M99NRbFx9a":"array:5 [\n  \"data\" => []\n  \"name\" => \"laravel.jetstream.http.livewire.navigation-menu\"\n  \"view\" => \"navigation-menu\"\n  \"component\" => \"Laravel\\Jetstream\\Http\\Livewire\\NavigationMenu\"\n  \"id\" => \"27X84Q1zQ4M99NRbFx9a\"\n]"},"count":6},"gate":{"count":0,"messages":[]},"session":{"_token":"svLptZODvy6vaenJMQQNJ6GIu0EUQnT5limeC14k","_previous":"array:1 [\n  \"url\" => \"http:\/\/127.0.0.1:8001\/user\/profile\"\n]","_flash":"array:2 [\n  \"old\" => []\n  \"new\" => []\n]","login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d":"5","password_hash_sanctum":"$2y$10$qvjYvHyQlsiHMSBncaxa6.bG\/QjXoh13PNGCmO4o3Ff9T3mg6HfFi","PHPDEBUGBAR_STACK_DATA":"[]"},"request":{"path_info":"\/user\/profile","status_code":"<pre class=sf-dump id=sf-dump-239421111 data-indent-pad=\"  \"><span class=sf-dump-num>200<\/span>\n<\/pre><script>Sfdump(\"sf-dump-239421111\", {\"maxDepth\":0})<\/script>\n","status_text":"OK","format":"html","content_type":"text\/html; charset=UTF-8","request_query":"<pre class=sf-dump id=sf-dump-753276251 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-753276251\", {\"maxDepth\":0})<\/script>\n","request_request":"<pre class=sf-dump id=sf-dump-1784643598 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1784643598\", {\"maxDepth\":0})<\/script>\n","request_headers":"<pre class=sf-dump id=sf-dump-1200900285 data-indent-pad=\"  \"><span class=sf-dump-note>array:16<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>host<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"14 characters\">127.0.0.1:8001<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>connection<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"57 characters\">&quot;Brave&quot;;v=&quot;113&quot;, &quot;Chromium&quot;;v=&quot;113&quot;, &quot;Not-A.Brand&quot;;v=&quot;24&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-mobile<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-platform<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"7 characters\">&quot;Linux&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>upgrade-insecure-requests<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str>1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>user-agent<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"101 characters\">Mozilla\/5.0 (X11; Linux x86_64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/113.0.0.0 Safari\/537.36<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"96 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-gpc<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str>1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-language<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">en-US,en<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-site<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"4 characters\">none<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-mode<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-user<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-dest<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-encoding<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cookie<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"713 characters\">XSRF-TOKEN=eyJpdiI6IlIwL29WbEpQekNWWXh5T3hLT0c0VHc9PSIsInZhbHVlIjoicWlyZDEzbVNGOEttNnFZOGZTN05WWURxVnZZVU9jdUlOUmljM2grNjVibG51Vm9JcmtxUW9pTzg2Q1B4RkhRdzdxWjF3ZU4rSUxVcFZBWkVKKzJHdXk1ajdkNjB1ZFJ5bDdKNklCV1FFUXJuUjZJZm1iODh1R3pyVXVKOW11ajkiLCJtYWMiOiJjZmZkZTRlYzE3NDdhYWMwYTFmMjE5NzhjMGY5YjhiOWU0YjdiZWMyYTBhMTExYWU1NDczMjlhYzA5YTlhZWY5IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Img5OS9hdmJrdXlIZGpkQi9ReXByT1E9PSIsInZhbHVlIjoicENkN1h0MXM2aTdZY1pLSXFXcmkzUEJtbjZyRkYxWTVOK1FBNWtUcllaNFcrYjdRUXlCdXljeTBUSFczR21kNklZcXYrZW1rb1JSeGd3ZEhLNHptQy9jdTUyN01jeU42YzJMQWNHU1BydVkzTHMzalZrb3pWYWlTdmJpRzl0b3EiLCJtYWMiOiI1M2EwYjYyZmVkZWE4OGYyYzgyYjE0OWViYTk1MDQyMTU3NjIwNTg0YTQyZDUwYTk0YTY3MjQ1ZDdiZmZiNzhjIiwidGFnIjoiIn0%3D<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1200900285\", {\"maxDepth\":0})<\/script>\n","request_server":"<pre class=sf-dump id=sf-dump-600041285 data-indent-pad=\"  \"><span class=sf-dump-note>array:31<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"55 characters\">\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/public<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_PORT<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">59188<\/span>\"\n  \"<span class=sf-dump-key>SERVER_SOFTWARE<\/span>\" => \"<span class=sf-dump-str title=\"28 characters\">PHP 8.2.6 Development Server<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PROTOCOL<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">HTTP\/1.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_NAME<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PORT<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">8001<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_URI<\/span>\" => \"<span class=sf-dump-str title=\"13 characters\">\/user\/profile<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_METHOD<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">GET<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_NAME<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\/index.php<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_FILENAME<\/span>\" => \"<span class=sf-dump-str title=\"65 characters\">\/home\/kd\/NCCS\/Sixth-Semester\/Laravel\/LaravelTodo\/public\/index.php<\/span>\"\n  \"<span class=sf-dump-key>PATH_INFO<\/span>\" => \"<span class=sf-dump-str title=\"13 characters\">\/user\/profile<\/span>\"\n  \"<span class=sf-dump-key>PHP_SELF<\/span>\" => \"<span class=sf-dump-str title=\"23 characters\">\/index.php\/user\/profile<\/span>\"\n  \"<span class=sf-dump-key>HTTP_HOST<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">127.0.0.1:8001<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CONNECTION<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA<\/span>\" => \"<span class=sf-dump-str title=\"57 characters\">&quot;Brave&quot;;v=&quot;113&quot;, &quot;Chromium&quot;;v=&quot;113&quot;, &quot;Not-A.Brand&quot;;v=&quot;24&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_MOBILE<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_PLATFORM<\/span>\" => \"<span class=sf-dump-str title=\"7 characters\">&quot;Linux&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_UPGRADE_INSECURE_REQUESTS<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_USER_AGENT<\/span>\" => \"<span class=sf-dump-str title=\"101 characters\">Mozilla\/5.0 (X11; Linux x86_64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/113.0.0.0 Safari\/537.36<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT<\/span>\" => \"<span class=sf-dump-str title=\"96 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_GPC<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">en-US,en<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_SITE<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">none<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_MODE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_USER<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_DEST<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  \"<span class=sf-dump-key>HTTP_COOKIE<\/span>\" => \"<span class=sf-dump-str title=\"713 characters\">XSRF-TOKEN=eyJpdiI6IlIwL29WbEpQekNWWXh5T3hLT0c0VHc9PSIsInZhbHVlIjoicWlyZDEzbVNGOEttNnFZOGZTN05WWURxVnZZVU9jdUlOUmljM2grNjVibG51Vm9JcmtxUW9pTzg2Q1B4RkhRdzdxWjF3ZU4rSUxVcFZBWkVKKzJHdXk1ajdkNjB1ZFJ5bDdKNklCV1FFUXJuUjZJZm1iODh1R3pyVXVKOW11ajkiLCJtYWMiOiJjZmZkZTRlYzE3NDdhYWMwYTFmMjE5NzhjMGY5YjhiOWU0YjdiZWMyYTBhMTExYWU1NDczMjlhYzA5YTlhZWY5IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Img5OS9hdmJrdXlIZGpkQi9ReXByT1E9PSIsInZhbHVlIjoicENkN1h0MXM2aTdZY1pLSXFXcmkzUEJtbjZyRkYxWTVOK1FBNWtUcllaNFcrYjdRUXlCdXljeTBUSFczR21kNklZcXYrZW1rb1JSeGd3ZEhLNHptQy9jdTUyN01jeU42YzJMQWNHU1BydVkzTHMzalZrb3pWYWlTdmJpRzl0b3EiLCJtYWMiOiI1M2EwYjYyZmVkZWE4OGYyYzgyYjE0OWViYTk1MDQyMTU3NjIwNTg0YTQyZDUwYTk0YTY3MjQ1ZDdiZmZiNzhjIiwidGFnIjoiIn0%3D<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\/span>\" => <span class=sf-dump-num>1684658242.3737<\/span>\n  \"<span class=sf-dump-key>REQUEST_TIME<\/span>\" => <span class=sf-dump-num>1684658242<\/span>\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-600041285\", {\"maxDepth\":0})<\/script>\n","request_cookies":"<pre class=sf-dump id=sf-dump-1071201147 data-indent-pad=\"  \"><span class=sf-dump-note>array:2<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>XSRF-TOKEN<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">svLptZODvy6vaenJMQQNJ6GIu0EUQnT5limeC14k<\/span>\"\n  \"<span class=sf-dump-key>laravel_session<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">yx5DxedJjeq2qeTRYu6OW82nBHtXhtK6P5aUBrVn<\/span>\"\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1071201147\", {\"maxDepth\":0})<\/script>\n","response_headers":"<pre class=sf-dump id=sf-dump-573850186 data-indent-pad=\"  \"><span class=sf-dump-note>array:7<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>content-type<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"24 characters\">text\/html; charset=UTF-8<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"55 characters\">max-age=0, must-revalidate, no-cache, no-store, private<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>date<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Sun, 21 May 2023 08:37:22 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>pragma<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">no-cache<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>expires<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Fri, 01 Jan 1990 00:00:00 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>set-cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"428 characters\">XSRF-TOKEN=eyJpdiI6IjdOUklaVHo2ejdPdG9PNllqZkIxZmc9PSIsInZhbHVlIjoiQUxQLytzdU83dU5IbEF4TWx3NjF5cXU0TVArK09pRDNCeGxHSzYvSVR5K0NIVU1NYjRLVkZERyt5ZjRFcnRWb2ZKSGVHMjJXRzR6V3IyaStEODNManBRMnVBOXViYTlreGwxemJuZmVyRkdPRWFiN0FRZjFSdjhRZ0R4elM0ZjUiLCJtYWMiOiI0NjI4NDRhZjgyZjEwZmM1NDVhNGE3NWYxNGEwMzY4YTUxNGFjZDhhYTI5Njc5YzJlODcyMWFiODgzOGE3MDE5IiwidGFnIjoiIn0%3D; expires=Sun, 21 May 2023 10:37:22 GMT; Max-Age=7200; path=\/; samesite=lax<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"443 characters\">laravel_session=eyJpdiI6ImdNQUhwMWZFV0wrZDN2WFFIU0tza2c9PSIsInZhbHVlIjoiS0FSSnNFQWNaZURVSzlQY2dndmdmTGxIc25zUlJESmhSUEYzMGZoQUs1MGJzemlWOGh6ZEMrcmJxallwSTF6UmIwUDFFM3BzdjJ4NFpsQ0F5b1o3cU1qMlNaS2E4QXgxODA3RWQxNml4STd0ejJoQkpjRjBLY0x0VlFLOWtyWUUiLCJtYWMiOiIyMWFjMzdmYzAxNjM2YzkwMjU4ODFmMzU1NDA5NzE3ODc0ODRmMWViY2VhMjhkZmQ5NmQ1YmU5MWRhZjc5OWQ4IiwidGFnIjoiIn0%3D; expires=Sun, 21 May 2023 10:37:22 GMT; Max-Age=7200; path=\/; httponly; samesite=lax<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>Set-Cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"400 characters\">XSRF-TOKEN=eyJpdiI6IjdOUklaVHo2ejdPdG9PNllqZkIxZmc9PSIsInZhbHVlIjoiQUxQLytzdU83dU5IbEF4TWx3NjF5cXU0TVArK09pRDNCeGxHSzYvSVR5K0NIVU1NYjRLVkZERyt5ZjRFcnRWb2ZKSGVHMjJXRzR6V3IyaStEODNManBRMnVBOXViYTlreGwxemJuZmVyRkdPRWFiN0FRZjFSdjhRZ0R4elM0ZjUiLCJtYWMiOiI0NjI4NDRhZjgyZjEwZmM1NDVhNGE3NWYxNGEwMzY4YTUxNGFjZDhhYTI5Njc5YzJlODcyMWFiODgzOGE3MDE5IiwidGFnIjoiIn0%3D; expires=Sun, 21-May-2023 10:37:22 GMT; path=\/<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"415 characters\">laravel_session=eyJpdiI6ImdNQUhwMWZFV0wrZDN2WFFIU0tza2c9PSIsInZhbHVlIjoiS0FSSnNFQWNaZURVSzlQY2dndmdmTGxIc25zUlJESmhSUEYzMGZoQUs1MGJzemlWOGh6ZEMrcmJxallwSTF6UmIwUDFFM3BzdjJ4NFpsQ0F5b1o3cU1qMlNaS2E4QXgxODA3RWQxNml4STd0ejJoQkpjRjBLY0x0VlFLOWtyWUUiLCJtYWMiOiIyMWFjMzdmYzAxNjM2YzkwMjU4ODFmMzU1NDA5NzE3ODc0ODRmMWViY2VhMjhkZmQ5NmQ1YmU5MWRhZjc5OWQ4IiwidGFnIjoiIn0%3D; expires=Sun, 21-May-2023 10:37:22 GMT; path=\/; httponly<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-573850186\", {\"maxDepth\":0})<\/script>\n","session_attributes":"<pre class=sf-dump id=sf-dump-1957405737 data-indent-pad=\"  \"><span class=sf-dump-note>array:6<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>_token<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">svLptZODvy6vaenJMQQNJ6GIu0EUQnT5limeC14k<\/span>\"\n  \"<span class=sf-dump-key>_previous<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>url<\/span>\" => \"<span class=sf-dump-str title=\"34 characters\">http:\/\/127.0.0.1:8001\/user\/profile<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>_flash<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>old<\/span>\" => []\n    \"<span class=sf-dump-key>new<\/span>\" => []\n  <\/samp>]\n  \"<span class=sf-dump-key>login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d<\/span>\" => <span class=sf-dump-num>5<\/span>\n  \"<span class=sf-dump-key>password_hash_sanctum<\/span>\" => \"<span class=sf-dump-str title=\"60 characters\">$2y$10$qvjYvHyQlsiHMSBncaxa6.bG\/QjXoh13PNGCmO4o3Ff9T3mg6HfFi<\/span>\"\n  \"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\/span>\" => []\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1957405737\", {\"maxDepth\":0})<\/script>\n"}}, "Xa8058606051045bda8f38ac8089bfbdc");

</script>
</body>
</html> --}}

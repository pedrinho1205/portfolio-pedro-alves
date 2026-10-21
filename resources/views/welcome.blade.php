<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pedro Alves | Software Engineer & Systems Analyst</title>
    <meta name="description" content="Pedro Alves — Software Engineer & Systems Analyst. Transformando regras de negócios em soluções tecnológicas de alto impacto.">
    <meta name="color-scheme" content="light">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Pedro Alves | Software Engineer & Systems Analyst">
    <meta property="og:description" content="Transformando regras de negócios em soluções tecnológicas de alto impacto.">
    <meta property="og:image" content="{{ asset('img/foto_pedro.jpg') }}">
    <meta name="twitter:card" content="summary">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='14' fill='%23059669'/%3E%3Ctext x='32' y='42' font-family='monospace' font-size='28' font-weight='700' text-anchor='middle' fill='white'%3EPA%3C/text%3E%3C/svg%3E">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|jetbrains-mono:400,500" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-navy-950 font-sans text-slate-300 antialiased">
@php
    $linkedin = 'https://www.linkedin.com/in/pedro-alves';
    $github = 'https://github.com/pedrinho1205';
    $email = 'seu-email@exemplo.com';
    $hasResume = file_exists(public_path('curriculo.pdf'));

    $experiences = [
        [
            'title' => 'ERP Customizado e Automação Industrial',
            'text' => 'Arquitetei e desenvolvi módulos core de um ERP (Compras, Produção, Estoque e Financeiro) em PHP/Laravel. Integrei soluções físico-digitais, como a automação de paletização com geração de etiquetas e leitura de código de barras para entrada no estoque em tempo real.',
        ],
        [
            'title' => 'Integração de Sistemas',
            'text' => 'Criei pipelines Python para coletar dados de CLPs locais e integrar com o ERP corporativo via APIs RESTful.',
        ],
    ];

    // [editar] Conteúdo de exemplo: substitua pelos seus projetos reais.
    $projects = [
        [
            'name' => 'ERP Multi-empresa',
            'problem' => '[editar] Problema de negócio que o ERP resolveu.',
            'stack' => ['PHP', 'Laravel', 'PostgreSQL'],
            'result' => '[editar] Resultado alcançado.',
            'link' => null,
        ],
        [
            'name' => 'Automação de Paletização',
            'problem' => '[editar] Geração de etiquetas e leitura de código de barras para entrada de estoque em tempo real.',
            'stack' => ['Laravel', 'Código de barras', 'Etiquetas'],
            'result' => '[editar] Resultado alcançado.',
            'link' => null,
        ],
        [
            'name' => 'Pipeline CLP → ERP',
            'problem' => '[editar] Coleta de dados de CLPs e integração com o ERP via API REST.',
            'stack' => ['Python', 'APIs REST', 'CLP'],
            'result' => '[editar] Resultado alcançado.',
            'link' => null,
        ],
    ];

    // [editar] Métricas de exemplo: use apenas números reais.
    $stats = [
        ['value' => '[editar]', 'label' => 'Módulos entregues'],
        ['value' => '[editar]', 'label' => 'Processos automatizados'],
        ['value' => '[editar]', 'label' => 'Redução de retrabalho'],
    ];

    // [editar] Formação de exemplo.
    $education = [
        ['title' => 'Six Sigma White Belt', 'detail' => 'Certificação'],
        ['title' => '[editar] Graduação', 'detail' => '[editar] Instituição / ano'],
        ['title' => '[editar] Curso ou certificação', 'detail' => '[editar] Instituição / ano'],
    ];

    $skills = [
        'Backend' => ['PHP', 'Laravel', 'Python', 'APIs REST', 'Clean Code'],
        'Dados' => ['PostgreSQL', 'MySQL', 'SQLite'],
        'Infra' => ['Arquitetura de Redes', 'OPNsense', 'Virtualização', 'Linux'],
        'Automação' => ['Integração Físico-Digital', 'Automação de Processos'],
    ];
@endphp

<header class="sticky top-0 z-10 border-b border-navy-800 bg-navy-950/80 backdrop-blur">
    <nav class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4 text-sm">
        <a href="#inicio" class="font-mono font-medium text-emerald-400">&lt;pedro.alves /&gt;</a>
        <ul class="hidden gap-6 text-slate-400 sm:flex">
            <li><a href="#sobre" class="transition hover:text-emerald-400">Sobre</a></li>
            <li><a href="#experiencia" class="transition hover:text-emerald-400">Experiência</a></li>
            <li><a href="#projetos" class="transition hover:text-emerald-400">Projetos</a></li>
            <li><a href="#skills" class="transition hover:text-emerald-400">Skills</a></li>
            <li><a href="#formacao" class="transition hover:text-emerald-400">Formação</a></li>
            <li><a href="#contato" class="transition hover:text-emerald-400">Contato</a></li>
        </ul>
    </nav>
</header>

<main class="mx-auto max-w-5xl px-6">
    <section id="inicio" class="flex min-h-[85vh] flex-col-reverse items-center justify-center gap-10 py-20 md:flex-row md:justify-between">
        <div class="animate-fade-up">
            <p class="mb-4 font-mono text-sm text-emerald-400">Olá, eu sou</p>
            <h1 class="text-5xl font-bold tracking-tight text-slate-900 sm:text-7xl">Pedro Alves</h1>
            <h2 class="mt-3 text-2xl font-semibold text-slate-400 sm:text-3xl">Software Engineer &amp; Systems Analyst</h2>
            <p class="mt-6 max-w-xl text-lg leading-relaxed text-slate-300">
                Transformando regras de negócios em soluções tecnológicas de alto impacto.
            </p>
            <div class="mt-10 flex flex-wrap items-center gap-4">
                <a href="{{ $linkedin }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"
                   class="flex items-center gap-2 rounded-lg border border-navy-700 bg-navy-900 px-4 py-2.5 text-sm font-medium text-slate-300 shadow-sm transition hover:border-emerald-500 hover:text-emerald-400">
                    <svg class="size-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.03-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z"/></svg>
                    LinkedIn
                </a>
                <a href="{{ $github }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub"
                   class="flex items-center gap-2 rounded-lg border border-navy-700 bg-navy-900 px-4 py-2.5 text-sm font-medium text-slate-300 shadow-sm transition hover:border-emerald-500 hover:text-emerald-400">
                    <svg class="size-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .3a12 12 0 0 0-3.8 23.4c.6.1.8-.3.8-.6v-2c-3.3.7-4-1.6-4-1.6-.6-1.4-1.4-1.8-1.4-1.8-1-.7.1-.7.1-.7 1.2.1 1.8 1.2 1.8 1.2 1 1.8 2.8 1.3 3.5 1 .1-.8.4-1.3.7-1.6-2.7-.3-5.5-1.3-5.5-5.9 0-1.3.5-2.4 1.2-3.2-.1-.3-.5-1.5.1-3.2 0 0 1-.3 3.3 1.2a11.5 11.5 0 0 1 6 0c2.3-1.5 3.3-1.2 3.3-1.2.6 1.7.2 2.9.1 3.2.8.8 1.2 1.9 1.2 3.2 0 4.6-2.8 5.6-5.5 5.9.4.4.8 1.1.8 2.2v3.3c0 .3.2.7.8.6A12 12 0 0 0 12 .3"/></svg>
                    GitHub
                </a>
            </div>
        </div>
        <img src="{{ asset('img/foto_pedro.jpg') }}" alt="Foto de Pedro Alves" width="800" height="800"
             class="animate-fade-up size-48 shrink-0 rounded-full border-4 border-emerald-500 object-cover shadow-lg sm:size-64">
    </section>

    <section id="sobre" class="scroll-mt-20 py-20">
        <h2 class="mb-8 flex items-center gap-4 text-2xl font-bold text-slate-900">
            <span class="font-mono text-emerald-400">01.</span> Sobre
            <span class="h-px flex-1 bg-navy-800"></span>
        </h2>
        <p class="max-w-3xl text-lg leading-relaxed">
            Acredito que a tecnologia só cumpre o seu papel quando facilita a vida de quem a utiliza. Atuo focado em resolver problemas reais, otimizar processos (com certificação Six Sigma White Belt) e garantir usabilidade. Minha paixão é analisar cenários complexos industriais, desenhar a arquitetura e construir o software que trará governança à operação.
        </p>
        <dl class="mt-12 grid gap-6 sm:grid-cols-3">
            @foreach ($stats as $stat)
                <div class="flex flex-col-reverse rounded-xl border border-navy-800 bg-navy-900 p-6 text-center shadow-sm">
                    <dt class="mt-1 text-sm text-slate-400">{{ $stat['label'] }}</dt>
                    <dd class="font-mono text-3xl font-bold text-emerald-400">{{ $stat['value'] }}</dd>
                </div>
            @endforeach
        </dl>
    </section>

    <section id="experiencia" class="scroll-mt-20 py-20">
        <h2 class="mb-8 flex items-center gap-4 text-2xl font-bold text-slate-900">
            <span class="font-mono text-emerald-400">02.</span> Experiência Profissional
            <span class="h-px flex-1 bg-navy-800"></span>
        </h2>
        <div class="grid gap-6 md:grid-cols-2">
            @foreach ($experiences as $experience)
                <article class="rounded-xl border border-navy-800 bg-navy-900 p-6 shadow-sm transition hover:-translate-y-1 hover:border-emerald-500/60">
                    <h3 class="mb-3 text-lg font-semibold text-emerald-400">{{ $experience['title'] }}</h3>
                    <p class="text-sm leading-relaxed text-slate-400">{{ $experience['text'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section id="projetos" class="scroll-mt-20 py-20">
        <h2 class="mb-8 flex items-center gap-4 text-2xl font-bold text-slate-900">
            <span class="font-mono text-emerald-400">03.</span> Projetos em Destaque
            <span class="h-px flex-1 bg-navy-800"></span>
        </h2>
        <div class="grid gap-6 md:grid-cols-3">
            @foreach ($projects as $project)
                <article class="flex flex-col rounded-xl border border-navy-800 bg-navy-900 p-6 shadow-sm transition hover:-translate-y-1 hover:border-emerald-500/60">
                    <h3 class="mb-3 text-lg font-semibold text-slate-900">{{ $project['name'] }}</h3>
                    <p class="text-sm leading-relaxed text-slate-400">{{ $project['problem'] }}</p>
                    <p class="mt-3 text-sm leading-relaxed text-slate-300"><span class="font-semibold text-emerald-400">Resultado:</span> {{ $project['result'] }}</p>
                    <ul class="mt-4 flex flex-wrap gap-2">
                        @foreach ($project['stack'] as $tech)
                            <li class="rounded-full bg-emerald-500/10 px-3 py-1 font-mono text-xs text-emerald-400">{{ $tech }}</li>
                        @endforeach
                    </ul>
                    @if ($project['link'])
                        <a href="{{ $project['link'] }}" target="_blank" rel="noopener noreferrer" class="mt-4 text-sm font-medium text-emerald-400 hover:underline">Ver projeto &rarr;</a>
                    @endif
                </article>
            @endforeach
        </div>
    </section>

    <section id="skills" class="scroll-mt-20 py-20">
        <h2 class="mb-8 flex items-center gap-4 text-2xl font-bold text-slate-900">
            <span class="font-mono text-emerald-400">04.</span> Hard Skills
            <span class="h-px flex-1 bg-navy-800"></span>
        </h2>
        <div class="grid gap-8 sm:grid-cols-2">
            @foreach ($skills as $category => $tags)
                <div>
                    <h3 class="mb-3 font-mono text-sm text-slate-400">{{ $category }}</h3>
                    <ul class="flex flex-wrap gap-3">
                        @foreach ($tags as $skill)
                            <li class="rounded-full border border-emerald-500/30 bg-emerald-500/10 px-4 py-1.5 font-mono text-sm text-emerald-400">{{ $skill }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </section>

    <section id="formacao" class="scroll-mt-20 py-20">
        <h2 class="mb-8 flex items-center gap-4 text-2xl font-bold text-slate-900">
            <span class="font-mono text-emerald-400">05.</span> Formação e Certificações
            <span class="h-px flex-1 bg-navy-800"></span>
        </h2>
        <ul class="space-y-4">
            @foreach ($education as $item)
                <li class="rounded-xl border border-navy-800 bg-navy-900 p-5 shadow-sm">
                    <p class="font-semibold text-slate-900">{{ $item['title'] }}</p>
                    <p class="text-sm text-slate-400">{{ $item['detail'] }}</p>
                </li>
            @endforeach
        </ul>
    </section>

    <section id="contato" class="scroll-mt-20 py-20 text-center">
        <p class="mb-3 font-mono text-sm text-emerald-400">06. Contato</p>
        <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl">Vamos conversar?</h2>
        <p class="mx-auto mt-4 max-w-xl text-slate-400">Aberto a novas oportunidades e a conversas sobre automação, sistemas e arquitetura de software.</p>
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="mailto:{{ $email }}" class="rounded-lg bg-emerald-500 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-emerald-400">Enviar e-mail</a>
            <a href="{{ $linkedin }}" target="_blank" rel="noopener noreferrer" class="rounded-lg border border-navy-700 bg-navy-900 px-6 py-3 text-sm font-semibold text-slate-300 shadow-sm transition hover:border-emerald-500 hover:text-emerald-400">LinkedIn</a>
            <a href="{{ $github }}" target="_blank" rel="noopener noreferrer" class="rounded-lg border border-navy-700 bg-navy-900 px-6 py-3 text-sm font-semibold text-slate-300 shadow-sm transition hover:border-emerald-500 hover:text-emerald-400">GitHub</a>
            @if ($hasResume)
                <a href="{{ asset('curriculo.pdf') }}" download class="rounded-lg border border-navy-700 bg-navy-900 px-6 py-3 text-sm font-semibold text-slate-300 shadow-sm transition hover:border-emerald-500 hover:text-emerald-400">Baixar currículo</a>
            @endif
        </div>
    </section>
</main>

<footer class="border-t border-navy-800 py-8 text-center font-mono text-xs text-slate-500">
    <p>&copy; {{ date('Y') }} Pedro Alves &middot; <a href="#inicio" class="hover:text-emerald-400">Voltar ao topo &uarr;</a></p>
</footer>
</body>
</html>

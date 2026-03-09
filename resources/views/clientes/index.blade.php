<!doctype html>
<html lang="pt-BR" class="h-full scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes | {{ config('app.name', 'Confecção') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full bg-slate-950 text-slate-100 antialiased">
    {{-- Background decorativo consistente com a Home --}}
    <div aria-hidden="true" class="pointer-events-none fixed inset-0 overflow-hidden">
        <div class="absolute -top-40 left-1/2 h-[36rem] w-[36rem] -translate-x-1/2 rounded-full bg-indigo-500/10 blur-3xl"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(99,102,241,0.05),transparent_55%)]"></div>
    </div>

    <div class="relative min-h-full">
        {{-- Header / Nav --}}
        <header class="border-b border-white/10 bg-slate-950/60 backdrop-blur">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <a href="{{ url('/') }}" class="group inline-flex items-center gap-3">
                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-white/10 ring-1 ring-white/15">
                        <span class="text-lg">🧵</span>
                    </span>
                    <span class="text-base font-semibold tracking-tight text-white">Painel de Clientes</span>
                </a>
                <a href="{{ route('clientes.create') }}" 
                   class="rounded-xl bg-gradient-to-r from-indigo-500 to-fuchsia-500 px-4 py-2 text-sm font-semibold text-white shadow-lg shadow-indigo-500/20 hover:brightness-110 transition">
                    + Novo Cliente
                </a>
            </div>
        </header>

        <main class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
            
            {{-- Mensagens de Sucesso --}}
            @if(session('success'))
                <div class="mb-6 rounded-2xl border border-emerald-500/20 bg-emerald-500/10 p-4 text-sm text-emerald-400">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Tabela de Clientes --}}
            <div class="overflow-hidden rounded-3xl border border-white/10 bg-white/5 shadow-2xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-slate-300">
                        <thead class="border-b border-white/10 bg-white/5 text-xs uppercase tracking-wider text-slate-400">
                            <tr>
                                <th class="px-6 py-4 font-semibold">Nome</th>
                                <th class="px-6 py-4 font-semibold">CPF</th>
                                <th class="px-6 py-4 font-semibold">E-mail</th>
                                <th class="px-6 py-4 font-semibold">Telefone</th>
                                <th class="px-6 py-4 font-semibold text-right">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            @forelse($clientes as $cliente)
                            <tr class="hover:bg-white/5 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-white">{{ $cliente->nome }}</div>
                                </td>
                                <td class="px-6 py-4 font-mono text-xs">{{ $cliente->cpf }}</td>
                                <td class="px-6 py-4">{{ $cliente->email }}</td>
                                <td class="px-6 py-4">{{ $cliente->telefone }}</td>
                                <td class="px-6 py-4 text-right space-x-2">
                                    {{-- Botões de ação com estilo premium --}}
                                    <button class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white/5 text-slate-400 hover:bg-indigo-500/20 hover:text-indigo-300 ring-1 ring-white/10 transition">
                                        ✎
                                    </button>
                                    <button class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white/5 text-slate-400 hover:bg-rose-500/20 hover:text-rose-400 ring-1 ring-white/10 transition">
                                        ✕
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center text-slate-500 italic">
                                    Nenhum cliente cadastrado até o momento.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Resumo Simples --}}
            <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-3">
                <div class="rounded-2xl border border-white/10 bg-white/5 p-4">
                    <div class="text-xs text-slate-400">Total de Clientes</div>
                    <div class="mt-1 text-xl font-semibold text-white">{{ count($clientes) }}</div>
                </div>
            </div>

        </main>

        <footer class="mt-auto py-10 text-center text-xs text-slate-500">
            © {{ date('Y') }} {{ config('app.name') }}
        </footer>
    </div>
</body>
</html>
<!doctype html>
<html lang="pt-BR" class="h-full scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Cliente | {{ config('app.name', 'Confecção') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full bg-slate-950 text-slate-100 antialiased">
    {{-- Background decorativo (o mesmo da Home e Index) --}}
    <div aria-hidden="true" class="pointer-events-none fixed inset-0 overflow-hidden">
        <div class="absolute -top-40 left-1/2 h-[36rem] w-[36rem] -translate-x-1/2 rounded-full bg-indigo-500/10 blur-3xl"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(99,102,241,0.05),transparent_55%)]"></div>
    </div>

    <div class="relative min-h-full flex flex-col">
        {{-- Top Bar --}}
        <header class="border-b border-white/10 bg-slate-950/60 backdrop-blur">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <a href="{{ route('clientes.index') }}" class="group inline-flex items-center gap-3">
                    <span class="grid h-10 w-10 place-items-center rounded-xl bg-white/10 ring-1 ring-white/15 group-hover:bg-white/20 transition">
                        <span class="text-sm">←</span>
                    </span>
                    <span class="text-base font-semibold tracking-tight text-white">Voltar para Clientes</span>
                </a>
            </div>
        </header>

        <main class="flex-1 mx-auto max-w-3xl w-full px-4 py-12 sm:px-6 lg:px-8">
            <div class="mb-8">
                <h1 class="text-3xl font-bold tracking-tight text-white">Cadastrar Novo Cliente</h1>
                <p class="mt-2 text-sm text-slate-400">Preencha as informações abaixo para adicionar um novo registro à sua base.</p>
            </div>

            {{-- Exibição de Erros de Validação --}}
            @if ($errors->any())
                <div class="mb-6 rounded-2xl border border-rose-500/20 bg-rose-500/10 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0 text-rose-400">⚠️</div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-rose-400">Ops! Verifique os campos:</h3>
                            <ul class="mt-2 list-disc list-inside text-xs text-rose-300/80 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            {{-- Card do Formulário --}}
            <div class="rounded-3xl border border-white/10 bg-white/5 p-8 shadow-2xl backdrop-blur-sm">
                
                <form action="{{ route('clientes.store') }}" method="POST" class="space-y-6">
                    @csrf {{-- Campo Nome --}}
                    <div>
                        <label for="nome" class="block text-sm font-medium text-slate-300">Nome Completo</label>
                        <input type="text" id="nome" name="nome" value="{{ old('nome') }}" 
                               class="mt-2 block w-full rounded-xl bg-slate-950/50 border border-white/10 px-4 py-3 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition outline-none" 
                               placeholder="Ex: João Silva" required>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Campo CPF --}}
                        <div>
                            <label for="cpf" class="block text-sm font-medium text-slate-300">CPF</label>
                            <input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}" 
                                   class="mt-2 block w-full rounded-xl bg-slate-950/50 border border-white/10 px-4 py-3 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition outline-none" 
                                   placeholder="000.000.000-00" required>
                        </div>

                        {{-- Campo Telefone --}}
                        <div>
                            <label for="telefone" class="block text-sm font-medium text-slate-300">Telefone</label>
                            <input type="text" id="telefone" name="telefone" value="{{ old('telefone') }}" 
                                   class="mt-2 block w-full rounded-xl bg-slate-950/50 border border-white/10 px-4 py-3 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition outline-none" 
                                   placeholder="(00) 00000-0000" required>
                        </div>
                    </div>

                    {{-- Campo E-mail --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-300">E-mail Corporativo</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" 
                               class="mt-2 block w-full rounded-xl bg-slate-950/50 border border-white/10 px-4 py-3 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition outline-none" 
                               placeholder="exemplo@empresa.com" required>
                    </div>

                    {{-- Campo Endereço --}}
                    <div>
                        <label for="endereco" class="block text-sm font-medium text-slate-300">Endereço Residencial</label>
                        <input type="text" id="endereco" name="endereco" value="{{ old('endereco') }}" 
                               class="mt-2 block w-full rounded-xl bg-slate-950/50 border border-white/10 px-4 py-3 text-white placeholder-slate-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition outline-none" 
                               placeholder="Rua, Número, Bairro, Cidade" required>
                    </div>

                    {{-- Botões de Ação --}}
                    <div class="flex items-center justify-end gap-4 pt-4 border-t border-white/10">
                        <a href="{{ route('clientes.index') }}" class="text-sm font-medium text-slate-400 hover:text-white transition">
                            Cancelar
                        </a>
                        <button type="submit" 
                                class="rounded-xl bg-gradient-to-r from-indigo-500 to-fuchsia-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-500/20 hover:brightness-110 transition">
                            Salvar Cadastro
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
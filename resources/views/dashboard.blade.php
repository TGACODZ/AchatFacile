<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - {{ config('app.name', 'Laravel') }}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/css/dashboard.css', 'resources/js/app.js'])
    @else
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    @endif
</head>

<body class="min-h-screen bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
    <div class="flex min-h-screen">
        <aside class="w-64 shrink-0 bg-white dark:bg-[#161615] border-r border-[#e3e3e0] dark:border-[#3E3E3A] p-6">
            <h2 class="text-lg font-medium mb-6">Menu</h2>
            <nav class="space-y-2" id="sidebar-nav">
                <button type="button" data-target="section-dashboard" class="w-full text-left px-3 py-2 rounded-sm flex items-center gap-2 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-[#1C1C1A]" aria-current="page">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" />
                    </svg>
                    <span>Dashboard</span>
                </button>
                <button type="button" data-target="section-compte-client" class="w-full text-left px-3 py-2 rounded-sm flex items-center gap-2 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-[#1C1C1A]">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z" />
                    </svg>
                    <span>Compte client</span>
                </button>
                <button type="button" data-target="section-groupe-prix" class="w-full text-left px-3 py-2 rounded-sm flex items-center gap-2 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-[#1C1C1A]">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 2.18L19 6v5c0 4.51-3.09 8.87-7 9.93-3.91-1.06-7-5.42-7-9.93V6l7-2.82zM11 7h2v6h-2V7zm0 8h2v2h-2v-2z" />
                    </svg>
                    <span>Groupe de prix</span>
                </button>
                <button type="button" data-target="section-remboursement" class="w-full text-left px-3 py-2 rounded-sm flex items-center gap-2 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-[#1C1C1A]">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 5V1L7 6l5 5V7c3.309 0 6 2.691 6 6a6 6 0 11-6-6z" />
                    </svg>
                    <span>Remboursement</span>
                </button>
                <button type="button" data-target="section-mes-ventes" class="w-full text-left px-3 py-2 rounded-sm flex items-center gap-2 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-[#1C1C1A]">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M3 3h2l3.6 7.59-1.35 2.44A2.992 2.992 0 009 17h9v-2H9.42a1 1 0 01-.9-.55L9 13h7a1 1 0 00.92-.62l3-7A1 1 0 0019 4H6.21l-.94-2H1v2h2zM9 19a2 2 0 100 4 2 2 0 000-4zm8 0a2 2 0 100 4 2 2 0 000-4z" />
                    </svg>
                    <span>Mes ventes</span>
                </button>
                <button type="button" data-target="section-messages" class="w-full text-left px-3 py-2 rounded-sm flex items-center gap-2 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-[#1C1C1A]">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M20 2H4a2 2 0 00-2 2v18l4-4h14a2 2 0 002-2V4a2 2 0 00-2-2z" />
                    </svg>
                    <span>Messages</span>
                </button>
                <button type="button" data-target="section-promotion" class="w-full text-left px-3 py-2 rounded-sm flex items-center gap-2 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-[#1C1C1A]">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 17l-5 3 1.9-5.9L4 9h6L12 3l2 6h6l-4.9 5.1L17 20z" />
                    </svg>
                    <span>Promotion</span>
                </button>
                <button type="button" data-target="section-conseillers" class="w-full text-left px-3 py-2 rounded-sm flex items-center gap-2 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-[#1C1C1A]">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V21h7v-2H3.5C4.46 18.76 6.97 18 8 18s3.54.76 4.5 1H9v2h7v-2.5C16 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V21h7v-1.5C24 14.17 18.33 13 16 13z" />
                    </svg>
                    <span>Conseillers</span>
                </button>
                <button type="button" data-target="section-stock" class="w-full text-left px-3 py-2 rounded-sm flex items-center gap-2 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-[#1C1C1A]">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M20 6H4V4h16v2zM4 8h16v10a2 2 0 01-2 2H6a2 2 0 01-2-2V8zm4 2v8h8v-8H8z" />
                    </svg>
                    <span>Stock</span>
                </button>
                <button type="button" data-target="section-prospection" class="w-full text-left px-3 py-2 rounded-sm flex items-center gap-2 hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-[#1C1C1A]">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                    </svg>
                    <span>Prospection</span>
                </button>
            </nav>
        </aside>
        <main class="flex-1 p-6 lg:p-10">
            <header class="flex items-center justify-between mb-6">
                <h1 class="text-2xl font-semibold">Dashboard</h1>
                <div class="flex items-center gap-4 text-sm">
                    <span class="text-gray-600 dark:text-gray-400">Bonjour, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300 underline underline-offset-4">
                            Déconnexion
                        </button>
                    </form>
                </div>
            </header>

            <section id="section-dashboard" data-section class="mb-8">

                <!-- Statistiques de vente style image -->
                <div class="flex flex-nowrap gap-4 mb-8 overflow-x-auto">
                    <!-- Total des ventes -->
                    <div class="bg-white dark:bg-[#161615] rounded-lg overflow-hidden shadow-lg dashboard-card">
                        <!-- En-tête orange -->
                        <div class="orange-header">
                            <h3>TOTAL DES VENTES</h3>
                        </div>
                        <!-- Corps bleu foncé -->
                        <div class="blue-body">
                            <div class="text-white font-bold text-lg">84 VENDU(S)</div>
                            <div class="border-t border-gray-600 my-2"></div>
                            <div class="text-white font-bold text-sm">CHIFFRE D'AFFAIRES : 13.963.000 FCFA</div>
                        </div>
                    </div>

                    <!-- Ventes Cash -->
                    <div class="bg-white dark:bg-[#161615] rounded-lg overflow-hidden shadow-lg dashboard-card">
                        <!-- En-tête orange -->
                        <div class="orange-header">
                            <h3>VENTES CASH</h3>
                        </div>
                        <!-- Corps bleu foncé -->
                        <div class="blue-body">
                            <div class="text-white font-bold text-lg">2 VENDU(S)</div>
                            <div class="border-t border-gray-600 my-2"></div>
                            <div class="text-white font-bold text-sm">CHIFFRE D'AFFAIRES : 245.000 FCFA</div>
                        </div>
                    </div>

                    <!-- Ventes à crédit -->
                    <div class="bg-white dark:bg-[#161615] rounded-lg overflow-hidden shadow-lg dashboard-card">
                        <!-- En-tête orange -->
                        <div class="orange-header">
                            <h3>VENTES À CRÉDIT</h3>
                        </div>
                        <!-- Corps bleu foncé -->
                        <div class="blue-body">
                            <div class="text-white font-bold text-lg">82 VENDU(S)</div>
                            <div class="border-t border-gray-600 my-2"></div>
                            <div class="text-white font-bold text-sm">CHIFFRE D'AFFAIRES : 13.718.000 FCFA</div>
                        </div>
                    </div>

                    <!-- Stock -->
                    <div class="bg-white dark:bg-[#161615] rounded-lg overflow-hidden shadow-lg dashboard-card">
                        <!-- En-tête orange -->
                        <div class="orange-header">
                            <h3>STOCK</h3>
                        </div>
                        <!-- Corps bleu foncé -->
                        <div class="blue-body">
                            <div class="text-white font-bold text-lg">102 ARTICLE(S)</div>
                            <div class="border-t border-gray-600 my-2"></div>
                            <div class="text-white font-bold text-sm">ARTICLES DISPONIBLES</div>
                        </div>
                    </div>

                    <!-- Nombre de clients -->
                    <div class="bg-white dark:bg-[#161615] rounded-lg overflow-hidden shadow-lg dashboard-card">
                        <!-- En-tête orange -->
                        <div class="orange-header">
                            <h3>NOMBRE DE CLIENTS</h3>
                        </div>
                        <!-- Corps bleu foncé -->
                        <div class="blue-body">
                            <div class="text-white font-bold text-lg">342 CLIENTS</div>
                            <div class="border-t border-gray-600 my-2"></div>
                            <div class="text-white font-bold text-sm">CLIENTS ACTIFS</div>
                        </div>
                    </div>

                    <!-- Total vente cash -->
                    <div class="bg-white dark:bg-[#161615] rounded-lg overflow-hidden shadow-lg dashboard-card">
                        <!-- En-tête orange -->
                        <div class="orange-header">
                            <h3>TOTAL VENTE CASH</h3>
                        </div>
                        <!-- Corps bleu foncé -->
                        <div class="blue-body">
                            <div class="text-white font-bold text-lg">2 VENTES</div>
                            <div class="border-t border-gray-600 my-2"></div>
                            <div class="text-white font-bold text-sm">MONTANT : 245.000 FCFA</div>
                        </div>
                    </div>

                    <!-- Total vente crédit -->
                    <div class="bg-white dark:bg-[#161615] rounded-lg overflow-hidden shadow-lg dashboard-card">
                        <!-- En-tête orange -->
                        <div class="orange-header">
                            <h3>TOTAL VENTE CRÉDIT</h3>
                        </div>
                        <!-- Corps bleu foncé -->
                        <div class="blue-body">
                            <div class="text-white font-bold text-lg">82 VENTES</div>
                            <div class="border-t border-gray-600 my-2"></div>
                            <div class="text-white font-bold text-sm">MONTANT : 13.718.000 FCFA</div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-compte-client" data-section class="mb-8 hidden" hidden>
                <h2 class="text-xl font-medium mb-3">Compte client</h2>
                <div class="p-4 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm">Liste et gestion des clients</div>
            </section>

            <section id="section-groupe-prix" data-section class="mb-8 hidden" hidden>
                <h2 class="text-xl font-medium mb-3">Groupe de prix</h2>
                <div class="p-4 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm">Configuration des groupes de prix</div>
            </section>

            <section id="section-remboursement" data-section class="mb-8 hidden" hidden>
                <h2 class="text-xl font-medium mb-3">Remboursement</h2>
                <div class="p-4 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm">Suivi des remboursements</div>
            </section>

            <section id="section-mes-ventes" data-section class="mb-8 hidden" hidden>
                <h2 class="text-xl font-medium mb-3">Mes ventes</h2>
                <div class="p-4 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm">Historique des ventes</div>
            </section>

            <section id="section-messages" data-section class="mb-8 hidden" hidden>
                <h2 class="text-xl font-medium mb-3">Messages</h2>
                <div class="p-4 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm">Messagerie</div>
            </section>

            <section id="section-promotion" data-section class="mb-8 hidden" hidden>
                <h2 class="text-xl font-medium mb-3">Promotion</h2>
                <div class="p-4 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm">Gestion des promotions</div>
            </section>

            <section id="section-conseillers" data-section class="mb-8 hidden" hidden>
                <h2 class="text-xl font-medium mb-3">Conseillers</h2>
                <div class="p-4 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm">Equipe de conseillers</div>
            </section>

            <section id="section-stock" data-section class="mb-8 hidden" hidden>
                <h2 class="text-xl font-medium mb-3">Stock</h2>
                <div class="p-4 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm">Gestion des stocks</div>
            </section>

            <section id="section-prospection" data-section class="mb-8 hidden" hidden>
                <h2 class="text-xl font-medium mb-3">Prospection</h2>
                <div class="p-4 bg-white dark:bg-[#161615] border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-sm">Outils de prospection</div>
            </section>
        </main>
    </div>

    <script>
        (function() {
            const nav = document.getElementById('sidebar-nav');
            const buttons = Array.from(nav.querySelectorAll('button[data-target]'));
            const sections = Array.from(document.querySelectorAll('[data-section]'));

            function showSection(targetId) {
                sections.forEach(sec => {
                    const isMatch = sec.id === targetId;
                    if (isMatch) {
                        sec.removeAttribute('hidden');
                        sec.classList.remove('hidden');
                    } else {
                        sec.setAttribute('hidden', 'hidden');
                        sec.classList.add('hidden');
                    }
                });
                buttons.forEach(btn => {
                    const active = btn.getAttribute('data-target') === targetId;
                    btn.setAttribute('aria-current', active ? 'page' : 'false');
                    // Visual active state (works even without Tailwind classes)
                    if (active) {
                        btn.style.backgroundColor = 'black';
                        btn.style.color = 'white';
                    } else {
                        btn.style.backgroundColor = '';
                        btn.style.color = '';
                    }
                });
            }

            // Initial section from hash or default to first
            const initial = (location.hash || '').replace('#', '') || (sections[0] && sections[0].id) || 'section-dashboard';
            showSection(initial);

            // Wire up clicks
            buttons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const target = btn.getAttribute('data-target');
                    if (!target) return;
                    history.replaceState(null, '', '#' + target);
                    showSection(target);
                });
            });
        })();
    </script>
</body>

</html>
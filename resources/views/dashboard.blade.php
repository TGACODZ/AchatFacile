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
                <!-- En-tête avec style coloré -->
                <div class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 rounded-2xl p-8 mb-8 text-white shadow-2xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-3xl font-bold mb-2">📊 Tableau de Bord</h2>
                            <p class="text-indigo-100 text-lg">Vue d'ensemble de votre activité commerciale</p>
                        </div>
                        <div class="hidden md:block">
                            <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-full p-4">
                                <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistiques de vente avec design moderne -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 mb-8">
                    <!-- Total ventes et chiffre d'affaires -->
                    <div class="group relative overflow-hidden bg-gradient-to-br from-cyan-400 via-blue-500 to-indigo-600 rounded-2xl p-6 text-white shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105">
                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-4">
                                <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-xl p-3">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                </div>
                                <div class="text-right">
                                    <span class="text-cyan-100 text-xs font-medium bg-white bg-opacity-20 px-2 py-1 rounded-full">+15%</span>
                                </div>
                            </div>
                            <h3 class="text-cyan-100 text-sm font-medium mb-1">Total Ventes</h3>
                            <p class="text-3xl font-bold mb-2">1,247</p>
                            <p class="text-cyan-100 text-xs">Chiffre d'affaires</p>
                            <p class="text-lg font-semibold">2,456,789 FCFA</p>
                        </div>
                    </div>

                    <!-- Nombre de clients -->
                    <div class="group relative overflow-hidden bg-gradient-to-br from-emerald-400 via-green-500 to-teal-600 rounded-2xl p-6 text-white shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105">
                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-4">
                                <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-xl p-3">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M16 7c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4zm-4 6c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/>
                                    </svg>
                                </div>
                                <div class="text-right">
                                    <span class="text-emerald-100 text-xs font-medium bg-white bg-opacity-20 px-2 py-1 rounded-full">+12%</span>
                                </div>
                            </div>
                            <h3 class="text-emerald-100 text-sm font-medium mb-1">Clients</h3>
                            <p class="text-3xl font-bold mb-2">342</p>
                            <p class="text-emerald-100 text-xs">Clients actifs</p>
                            <p class="text-lg font-semibold">Croissance mensuelle</p>
                        </div>
                    </div>

                    <!-- Ventes cash -->
                    <div class="group relative overflow-hidden bg-gradient-to-br from-violet-400 via-purple-500 to-fuchsia-600 rounded-2xl p-6 text-white shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105">
                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-4">
                                <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-xl p-3">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                                    </svg>
                                </div>
                                <div class="text-right">
                                    <span class="text-violet-100 text-xs font-medium bg-white bg-opacity-20 px-2 py-1 rounded-full">+8%</span>
                                </div>
                            </div>
                            <h3 class="text-violet-100 text-sm font-medium mb-1">Ventes Cash</h3>
                            <p class="text-3xl font-bold mb-2">892</p>
                            <p class="text-violet-100 text-xs">Paiements comptant</p>
                            <p class="text-lg font-semibold">1,789,234 FCFA</p>
                        </div>
                    </div>

                    <!-- Ventes crédit -->
                    <div class="group relative overflow-hidden bg-gradient-to-br from-amber-400 via-orange-500 to-red-500 rounded-2xl p-6 text-white shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105">
                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-4">
                                <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-xl p-3">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/>
                                    </svg>
                                </div>
                                <div class="text-right">
                                    <span class="text-amber-100 text-xs font-medium bg-white bg-opacity-20 px-2 py-1 rounded-full">+5%</span>
                                </div>
                            </div>
                            <h3 class="text-amber-100 text-sm font-medium mb-1">Ventes Crédit</h3>
                            <p class="text-3xl font-bold mb-2">355</p>
                            <p class="text-amber-100 text-xs">Paiements différés</p>
                            <p class="text-lg font-semibold">667,555 FCFA</p>
                        </div>
                    </div>

                    <!-- Stock -->
                    <div class="group relative overflow-hidden bg-gradient-to-br from-rose-400 via-pink-500 to-red-600 rounded-2xl p-6 text-white shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105">
                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-10 transition-opacity duration-300"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-4">
                                <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-xl p-3">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                </div>
                                <div class="text-right">
                                    <span class="text-rose-100 text-xs font-medium bg-white bg-opacity-20 px-2 py-1 rounded-full">Stock</span>
                                </div>
                            </div>
                            <h3 class="text-rose-100 text-sm font-medium mb-1">Stock</h3>
                            <p class="text-3xl font-bold mb-2">1,089</p>
                            <p class="text-rose-100 text-xs">Articles disponibles</p>
                            <p class="text-lg font-semibold">15 catégories</p>
                        </div>
                    </div>
                </div>

                <!-- Graphiques et tableaux avec style coloré -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Ventes récentes -->
                    <div class="bg-gradient-to-br from-slate-50 to-blue-50 dark:from-slate-800 dark:to-blue-900 border border-blue-200 dark:border-blue-700 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-xl p-3 mr-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">💼 Ventes Récentes</h3>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center p-4 bg-white dark:bg-slate-700 rounded-xl shadow-sm border-l-4 border-blue-500">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                                    <span class="font-medium text-gray-700 dark:text-gray-200">Vente #001</span>
                                </div>
                                <span class="font-bold text-blue-600 dark:text-blue-400">45,000 FCFA</span>
                            </div>
                            <div class="flex justify-between items-center p-4 bg-white dark:bg-slate-700 rounded-xl shadow-sm border-l-4 border-green-500">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                                    <span class="font-medium text-gray-700 dark:text-gray-200">Vente #002</span>
                                </div>
                                <span class="font-bold text-green-600 dark:text-green-400">32,500 FCFA</span>
                            </div>
                            <div class="flex justify-between items-center p-4 bg-white dark:bg-slate-700 rounded-xl shadow-sm border-l-4 border-purple-500">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-purple-500 rounded-full mr-3"></div>
                                    <span class="font-medium text-gray-700 dark:text-gray-200">Vente #003</span>
                                </div>
                                <span class="font-bold text-purple-600 dark:text-purple-400">67,800 FCFA</span>
                            </div>
                        </div>
                    </div>

                    <!-- Produits populaires -->
                    <div class="bg-gradient-to-br from-slate-50 to-emerald-50 dark:from-slate-800 dark:to-emerald-900 border border-emerald-200 dark:border-emerald-700 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-r from-emerald-500 to-teal-600 rounded-xl p-3 mr-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 17l-5 3 1.9-5.9L4 9h6L12 3l2 6h6l-4.9 5.1L17 20z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white">⭐ Produits Populaires</h3>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center p-4 bg-white dark:bg-slate-700 rounded-xl shadow-sm border-l-4 border-emerald-500">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-emerald-500 rounded-full mr-3"></div>
                                    <span class="font-medium text-gray-700 dark:text-gray-200">Produit A</span>
                                </div>
                                <span class="font-bold text-emerald-600 dark:text-emerald-400">156 ventes</span>
                            </div>
                            <div class="flex justify-between items-center p-4 bg-white dark:bg-slate-700 rounded-xl shadow-sm border-l-4 border-amber-500">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-amber-500 rounded-full mr-3"></div>
                                    <span class="font-medium text-gray-700 dark:text-gray-200">Produit B</span>
                                </div>
                                <span class="font-bold text-amber-600 dark:text-amber-400">89 ventes</span>
                            </div>
                            <div class="flex justify-between items-center p-4 bg-white dark:bg-slate-700 rounded-xl shadow-sm border-l-4 border-rose-500">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-rose-500 rounded-full mr-3"></div>
                                    <span class="font-medium text-gray-700 dark:text-gray-200">Produit C</span>
                                </div>
                                <span class="font-bold text-rose-600 dark:text-rose-400">67 ventes</span>
                            </div>
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
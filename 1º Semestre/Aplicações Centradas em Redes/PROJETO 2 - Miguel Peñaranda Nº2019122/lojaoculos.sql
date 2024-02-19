-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 21-Jan-2024 às 21:55
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojaoculos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `client_problems`
--

CREATE TABLE `client_problems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historial`
--

CREATE TABLE `historial` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `oculo_id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `historial`
--

INSERT INTO `historial` (`id`, `marca`, `modelo`, `color`, `price`, `quantity`, `oculo_id`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 'DAVID BECKHAM', 'DB 7000/S XWY(9K)', 'Azul', 120.00, 1, 3, 2, '2023-12-02 21:06:58', '2023-12-02 21:06:58'),
(10, 'CAROLINA HERRERA', 'CH 0001/S 807(9O)', 'DARK GREY SHADED', 150.00, 1, 6, 2, '2023-12-02 21:07:35', '2023-12-02 21:07:35'),
(11, 'Ray-Ban', 'Farmeyer', 'Preto', 75.00, 1, 8, 1, '2023-12-02 21:24:13', '2023-12-02 21:24:13'),
(12, 'CAROLINA HERRERA', 'CH 0001/S 807(9O)', 'DARK GREY SHADED', 150.00, 1, 6, 1, '2023-12-03 01:24:20', '2023-12-03 01:24:20'),
(13, 'DAVID BECKHAM', 'DB 7000/S XWY(9K)', 'Azul', 120.00, 2, 3, 1, '2023-12-03 01:24:20', '2023-12-03 01:24:20'),
(14, 'Calvin Klein', 'CK19130 780', 'Azul', 75.00, 1, 9, 1, '2023-12-03 01:24:20', '2023-12-03 01:24:20'),
(15, 'CAROLINA HERRERA', 'CH 0001/S 807(9O)', 'DARK GREY SHADED', 150.00, 3, 6, 2, '2023-12-03 01:25:23', '2023-12-03 01:25:23'),
(16, 'Ray-Ban', 'Farmeyer', 'Preto', 75.00, 1, 8, 3, '2023-12-03 01:27:44', '2023-12-03 01:27:44'),
(17, 'Ray-Ban', 'Farmeyer', 'Preto', 75.00, 1, 8, 1, '2023-12-04 21:43:37', '2023-12-04 21:43:37'),
(18, 'BOTTEGA VENETA', 'DB 7000/S XWY(9K)', 'DARK GREY SHADED', 150.00, 2, 7, 1, '2023-12-04 21:43:37', '2023-12-04 21:43:37'),
(19, 'BOTTEGA VENETA', 'DB 7000/S XWY(9K)', 'DARK GREY SHADED', 150.00, 8, 7, 3, '2023-12-05 03:45:16', '2023-12-05 03:45:16'),
(20, 'DAVID BECKHAM', 'DB 7000/S XWY(9K)', 'Azul', 120.00, 1, 3, 1, '2023-12-05 03:45:47', '2023-12-05 03:45:47'),
(21, 'Ray-Ban', 'Farmeyer', 'Preto', 75.00, 1, 8, 1, '2023-12-05 03:45:47', '2023-12-05 03:45:47'),
(22, 'DAVID BECKHAM', 'DB 7000/S XWY(9K)', 'Azul', 120.00, 2, 3, 1, '2024-01-06 15:25:23', '2024-01-06 15:25:23'),
(23, 'Ray-Ban', 'Farmeyer', 'Preto', 75.00, 5, 8, 1, '2024-01-06 16:35:19', '2024-01-06 16:35:19'),
(24, 'PERSOL', 'PO3333S Elio', 'Beige Tortoise', 500.00, 1, 11, 1, '2024-01-21 02:57:04', '2024-01-21 02:57:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `items_cart`
--

CREATE TABLE `items_cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `shopping_cart_id` bigint(20) UNSIGNED NOT NULL,
  `oculo_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_30_102036_create_client_problems_table', 2),
(6, '2023_11_30_102948_create_shopping_cart_table', 2),
(7, '2023_11_30_105247_create__oculo_table', 3),
(8, '2023_11_30_110602_create_historial_table', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `oculo`
--

CREATE TABLE `oculo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marca` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `tamanho` double(8,2) NOT NULL,
  `largura` double(8,2) NOT NULL,
  `altura` double(8,2) NOT NULL,
  `ponte` double(8,2) NOT NULL,
  `comprimento_haste` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `oculo`
--

INSERT INTO `oculo` (`id`, `marca`, `modelo`, `color`, `material`, `image`, `description`, `price`, `stock`, `tamanho`, `largura`, `altura`, `ponte`, `comprimento_haste`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'DAVID BECKHAM', 'DB 7000/S XWY(9K)', 'Azul', 'Acetato', '/storage/image/oculos/oculo_1701466159.webp', 'Los lentes David Beckham DB 7000/S XWY(9K) son parte de la colección de gafas de David Beckham, una línea que combina el estilo distintivo y sofisticado asociado con el famoso futbolista y personalidad de la moda, David Beckham.', 120.00, 8, 100.00, 30.00, 22.00, 23.00, 19.00, 1, '2023-12-01 21:29:19', '2024-01-06 15:25:23'),
(6, 'CAROLINA HERRERA', 'CH 0001/S 807(9O)', 'DARK GREY SHADED', 'Acetato', '/storage/image/oculos/oculo_1701486506.png', 'Los lentes Carolina Herrera CH 0001/S probablemente presentan un diseño distinguido y chic, reflejando la estética refinada y moderna de la marca. Este modelo podría caracterizarse por líneas elegantes, formas equilibradas y posiblemente detalles decorativos sutiles que reflejen la atención de la diseñadora al detalle.', 140.00, 0, 51.00, 25.00, 24.00, 20.00, 101.00, 3, '2023-12-02 03:08:26', '2023-12-03 01:41:36'),
(7, 'BOTTEGA VENETA', 'DB 7000/S XWY(9K)', 'DARK GREY SHADED', 'Acetato', '/storage/image/oculos/oculo_1701549438.png', 'Os melhores oculos', 150.00, 0, 50.00, 23.00, 21.00, 32.00, 100.00, 2, '2023-12-02 20:37:18', '2023-12-05 03:45:16'),
(8, 'Ray-Ban', 'Farmeyer', 'Preto', 'Acetato', '/storage/image/oculos/oculo_1701549502.png', 'Buenos', 75.00, 0, 50.00, 22.00, 22.00, 20.00, 100.00, 2, '2023-12-02 20:38:22', '2024-01-06 16:35:19'),
(11, 'PERSOL', 'PO3333S Elio', 'Beige Tortoise', 'acetato', '/storage/image/oculos/oculo_1705805775.avif', 'Elevate your style with Persol Elio sunglasses. The square shape, crafted from durable acetate, offers a modern and sophisticated look. The beige tortoise frame color is complemented by blue gradient dark blue polarized lenses, adding a pop of personality to the overall design. These glasses feature polarized lenses that reduce glare and enhance clarity, making them ideal for outdoor activities. The key bridge adds a unique touch to the overall design. Embrace the synergy of fashion and functionality with these stylish shades that offer protection from UV rays in addition to their chic aesthetic appeal.', 500.00, 9, 23.00, 28.00, 38.00, 25.00, 25.00, 1, '2024-01-21 02:56:15', '2024-01-21 02:57:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `oculo_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `comment`, `user_id`, `oculo_id`, `created_at`, `updated_at`) VALUES
(9, 10, 'Excelente Produto', 2, 3, '2023-12-02 21:07:11', '2023-12-02 21:07:11'),
(10, 10, 'Brutal!', 2, 3, '2023-12-02 21:07:44', '2023-12-02 21:07:44'),
(11, 9, 'afaf', 2, 3, '2023-12-02 21:12:51', '2023-12-02 21:12:51'),
(12, 10, 'Os melhores oculos', 2, 6, '2023-12-02 21:22:46', '2023-12-02 21:22:46'),
(13, 10, 'Te amo Jacky', 1, 8, '2023-12-02 21:24:23', '2023-12-02 21:24:23'),
(14, 10, 'Soy dislexico', 3, 8, '2023-12-03 01:27:58', '2023-12-03 01:27:58'),
(15, 7, 'Excelente Oculos!', 1, 7, '2023-12-04 21:44:19', '2023-12-04 21:44:19'),
(16, 5, 'holiwis!', 1, 7, '2023-12-05 03:46:04', '2023-12-05 03:46:04'),
(17, 10, 'dadasdsad', 1, 8, '2024-01-06 16:36:45', '2024-01-06 16:36:45'),
(18, 10, 'Excelente Oculos !', 1, 11, '2024-01-21 02:57:45', '2024-01-21 02:57:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `shopping_cart`
--

INSERT INTO `shopping_cart` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, '2023-11-30 10:47:11', '2023-11-30 10:47:11'),
(5, 5, '2024-01-06 16:19:56', '2024-01-06 16:19:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Miguel Correia', 'miguelcorreia1501@gmail.com', NULL, '$2y$12$SLe7IdNDAHI8n4jghMfkLOeEco1eUZA4wMM4Op8dW3OMhNxi7i2mW', 1, 'Up0mj6MUKP8vwDfLbJhi5X8F81kuDgPIYDw0sOA0oHWEYpAUi4jihJhl2Poi', '2023-11-30 09:43:25', '2023-11-30 09:43:25'),
(2, 'Adriana Camara', 'jacky@gmail.com', NULL, '$2y$12$S1gUr9kDbj7oKUe2b9W4e.dmsdatWtNtGlo9PVxoCjdYEU3ZJfNkm', 0, NULL, '2023-11-30 09:50:31', '2023-12-01 19:59:04'),
(3, 'Saul Pinto', 'saul@gmail.com', NULL, '$2y$12$/fANK7nVHRA1Wmqbm2EIS.vcq2bp.nrhzBAWpyhFo2bzBree/5mIW', 0, NULL, '2023-11-30 10:47:11', '2023-12-03 01:28:44'),
(5, 'Hugo Perdigao', 'hugo@gmail.com', NULL, '$2y$12$MeRoTDcozsDRFh/c0xknpue/MhNv.pDGNwW52h.4R6nRMmgCvF17m', 0, NULL, '2024-01-06 16:19:56', '2024-01-06 16:19:56');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `client_problems`
--
ALTER TABLE `client_problems`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historial_user_id_foreign` (`user_id`);

--
-- Índices para tabela `items_cart`
--
ALTER TABLE `items_cart`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `oculo`
--
ALTER TABLE `oculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oculo_user_id_foreign` (`user_id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_cart_user_id_foreign` (`user_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `client_problems`
--
ALTER TABLE `client_problems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `historial`
--
ALTER TABLE `historial`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `items_cart`
--
ALTER TABLE `items_cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `oculo`
--
ALTER TABLE `oculo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `oculo`
--
ALTER TABLE `oculo`
  ADD CONSTRAINT `oculo_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `shopping_cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

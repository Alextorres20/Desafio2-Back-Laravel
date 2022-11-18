-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2022 a las 21:01:09
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `desafio2`
--
CREATE DATABASE IF NOT EXISTS `desafio2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `desafio2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `caracteristicas`
--

INSERT INTO `caracteristicas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'audacia', '2022-11-16 12:01:59', '2022-11-16 12:01:59'),
(2, 'maldad', '2022-11-16 12:03:10', '2022-11-16 12:03:10'),
(3, 'sabiduria', '2022-11-16 12:03:10', '2022-11-16 12:03:10'),
(4, 'virtud', '2022-11-16 11:50:37', '2022-11-16 11:50:37'),
(5, 'nobleza', '2022-11-16 11:50:37', '2022-11-16 11:50:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas_usuarios`
--

CREATE TABLE `caracteristicas_usuarios` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `id_caracteristica` bigint(20) UNSIGNED NOT NULL,
  `valor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `caracteristicas_usuarios`
--

INSERT INTO `caracteristicas_usuarios` (`id_usuario`, `id_caracteristica`, `valor`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2022-11-16 12:08:27', '2022-11-16 12:08:27'),
(1, 5, 1, '2022-11-16 12:08:27', '2022-11-16 12:08:27'),
(6, 4, 4, '2022-11-16 12:08:27', '2022-11-16 12:08:27'),
(6, 5, 4, '2022-11-16 12:08:27', '2022-11-16 12:08:27'),
(7, 2, 4, '2022-11-16 12:08:27', '2022-11-16 12:08:27'),
(8, 5, 4, '2022-11-16 12:08:27', '2022-11-16 12:08:27'),
(9, 5, 3, '2022-11-16 12:08:27', '2022-11-16 12:08:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dios`
--

CREATE TABLE `dios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dios`
--

INSERT INTO `dios` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Zeus', '2022-11-18 18:05:30', '2022-11-18 18:05:30'),
(2, 'Poseidon', '2022-11-18 18:05:30', '2022-11-18 18:05:30'),
(3, 'Hades', '2022-11-18 18:05:30', '2022-11-18 18:05:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dioses_humanos`
--

CREATE TABLE `dioses_humanos` (
  `id_dios` bigint(20) UNSIGNED NOT NULL,
  `id_humano` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dioses_humanos`
--

INSERT INTO `dioses_humanos` (`id_dios`, `id_humano`, `created_at`, `updated_at`) VALUES
(2, 7, '2022-11-18 18:44:19', '2022-11-18 18:44:19'),
(2, 10, '2022-11-18 18:44:20', '2022-11-18 18:44:20'),
(3, 5, '2022-11-18 18:44:19', '2022-11-18 18:44:19'),
(3, 9, '2022-11-18 18:44:19', '2022-11-18 18:44:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `humanos`
--

CREATE TABLE `humanos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `destino` int(11) NOT NULL,
  `donde_murio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `humanos`
--

INSERT INTO `humanos` (`id`, `destino`, `donde_murio`, `created_at`, `updated_at`) VALUES
(1, 89, 'Campos Eliseos', '2022-11-16 12:00:30', '2022-11-16 12:00:30'),
(2, 44, 'Campos Eliseos', '2022-11-16 12:00:45', '2022-11-16 12:00:45'),
(5, 22, NULL, '2022-11-16 12:00:00', '2022-11-16 12:00:00'),
(6, 99, NULL, '2022-11-16 12:00:00', '2022-11-16 12:00:00'),
(7, 9, NULL, '2022-11-16 12:00:00', '2022-11-16 12:00:00'),
(9, 8, NULL, '2022-11-16 12:00:30', '2022-11-16 12:00:30'),
(10, 84, 'Campos Eliseos', '2022-11-16 11:59:59', '2022-11-16 11:59:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_11_16_121630_create_caracteristicas_usuarios_table', 1),
(13, '2022_11_18_185604_create_dios_table', 10),
(14, '2022_11_16_112505_create_pruebas_table', 11),
(15, '2022_11_17_095958_create_prueba_puntual_table', 12),
(16, '2022_11_17_111333_create_prueba_oraculo_table', 13),
(17, '2022_11_17_100403_create_prueba_oraculo_libre_table', 14),
(18, '2022_11_17_100420_create_prueba_oraculo_valoracion_table', 15),
(19, '2022_11_17_100439_create_prueba_oraculo_eleccion_table', 16),
(20, '2022_11_17_200907_create_pruebas_humanos_table', 17),
(21, '2022_11_16_122209_create_dioses_humanos_table', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas`
--

CREATE TABLE `pruebas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_dios` bigint(20) UNSIGNED NOT NULL,
  `cantidad_destino` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pruebas`
--

INSERT INTO `pruebas` (`id`, `id_dios`, `cantidad_destino`, `created_at`, `updated_at`) VALUES
(1, 2, 11, '2022-11-18 18:34:06', '2022-11-18 18:34:06'),
(2, 2, 73, '2022-11-18 18:34:06', '2022-11-18 18:34:06'),
(3, 1, 18, '2022-11-18 18:34:06', '2022-11-18 18:34:06'),
(4, 3, 82, '2022-11-18 18:34:06', '2022-11-18 18:34:06'),
(5, 1, 76, '2022-11-18 18:34:06', '2022-11-18 18:34:06'),
(6, 2, 25, '2022-11-18 18:34:06', '2022-11-18 18:34:06'),
(7, 3, 46, '2022-11-18 18:34:06', '2022-11-18 18:34:06'),
(8, 1, 94, '2022-11-18 18:34:06', '2022-11-18 18:34:06'),
(9, 3, 74, '2022-11-18 18:34:06', '2022-11-18 18:34:06'),
(10, 1, 32, '2022-11-18 18:34:06', '2022-11-18 18:34:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas_humanos`
--

CREATE TABLE `pruebas_humanos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_prueba` bigint(20) UNSIGNED NOT NULL,
  `id_humano` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pruebas_humanos`
--

INSERT INTO `pruebas_humanos` (`id`, `id_prueba`, `id_humano`, `created_at`, `updated_at`) VALUES
(1, 4, 10, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(2, 4, 9, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(3, 4, 1, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(4, 10, 9, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(5, 6, 5, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(6, 3, 1, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(7, 2, 10, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(8, 2, 5, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(9, 2, 7, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(10, 10, 10, '2022-11-18 18:34:09', '2022-11-18 18:34:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas_oraculo`
--

CREATE TABLE `pruebas_oraculo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_prueba` bigint(20) UNSIGNED NOT NULL,
  `pregunta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `respuesta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pruebas_oraculo`
--

INSERT INTO `pruebas_oraculo` (`id`, `id_prueba`, `pregunta`, `respuesta`, `created_at`, `updated_at`) VALUES
(1, 9, 'Qui.', 'Voluptas sit autem.', '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(2, 3, 'Quo.', 'Ullam totam in.', '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(3, 1, 'Tenetur.', 'Asperiores quia ut.', '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(4, 9, 'Expedita.', 'Sunt laboriosam.', '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(5, 3, 'Rerum.', 'Modi.', '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(6, 8, 'Saepe.', 'Alias.', '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(7, 9, 'Et et.', 'Rerum odio.', '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(8, 8, 'Non omnis.', 'Earum.', '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(9, 2, 'Odit et.', 'Repellendus iure.', '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(10, 9, 'Et.', 'Quod.', '2022-11-18 18:34:07', '2022-11-18 18:34:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_oraculo_eleccion`
--

CREATE TABLE `prueba_oraculo_eleccion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_prueba_oraculo` bigint(20) UNSIGNED NOT NULL,
  `caracteristica_asociada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_oraculo_eleccion`
--

INSERT INTO `prueba_oraculo_eleccion` (`id`, `id_prueba_oraculo`, `caracteristica_asociada`, `valor`, `created_at`, `updated_at`) VALUES
(1, 4, '4', 1, '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(2, 2, '4', 1, '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(3, 6, '2', 2, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(4, 4, '3', 5, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(5, 9, '3', 5, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(6, 8, '2', 5, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(7, 9, '3', 1, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(8, 1, '3', 2, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(9, 6, '4', 5, '2022-11-18 18:34:09', '2022-11-18 18:34:09'),
(10, 1, '4', 5, '2022-11-18 18:34:09', '2022-11-18 18:34:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_oraculo_libre`
--

CREATE TABLE `prueba_oraculo_libre` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_prueba_oraculo` bigint(20) UNSIGNED NOT NULL,
  `palabras_asociadas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porcentaje` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_oraculo_libre`
--

INSERT INTO `prueba_oraculo_libre` (`id`, `id_prueba_oraculo`, `palabras_asociadas`, `porcentaje`, `created_at`, `updated_at`) VALUES
(1, 3, 'Est.', 17, '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(2, 6, 'Eaque et iusto.', 11, '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(3, 9, 'Quia ex.', 51, '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(4, 5, 'Neque iste.', 29, '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(5, 5, 'Quae quo ex ipsam.', 70, '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(6, 9, 'Exercitationem.', 56, '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(7, 1, 'Est quia.', 19, '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(8, 3, 'Aut.', 42, '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(9, 10, 'Enim.', 46, '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(10, 2, 'Quam ad dolorem.', 86, '2022-11-18 18:34:08', '2022-11-18 18:34:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_oraculo_valoracion`
--

CREATE TABLE `prueba_oraculo_valoracion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_prueba_oraculo` bigint(20) UNSIGNED NOT NULL,
  `caracteristica_asociada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_oraculo_valoracion`
--

INSERT INTO `prueba_oraculo_valoracion` (`id`, `id_prueba_oraculo`, `caracteristica_asociada`, `created_at`, `updated_at`) VALUES
(1, 8, '2', '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(2, 3, '5', '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(3, 7, '1', '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(4, 9, '4', '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(5, 7, '3', '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(6, 3, '5', '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(7, 7, '2', '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(8, 10, '1', '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(9, 6, '5', '2022-11-18 18:34:08', '2022-11-18 18:34:08'),
(10, 8, '3', '2022-11-18 18:34:08', '2022-11-18 18:34:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba_puntual`
--

CREATE TABLE `prueba_puntual` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_prueba` bigint(20) UNSIGNED NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_caracteristica` bigint(20) UNSIGNED NOT NULL,
  `dificultad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prueba_puntual`
--

INSERT INTO `prueba_puntual` (`id`, `id_prueba`, `descripcion`, `id_caracteristica`, `dificultad`, `created_at`, `updated_at`) VALUES
(1, 6, 'Nisi et porro quaerat consequatur aut. Autem et saepe dolor et.', 2, 70, '2022-11-18 18:34:06', '2022-11-18 18:34:06'),
(2, 7, 'Aliquam eos quod ut debitis facilis adipisci eos.', 4, 73, '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(3, 6, 'Voluptate fugiat reiciendis ut asperiores sit aperiam facilis sit.', 2, 21, '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(4, 3, 'Fuga voluptates ullam quo iure neque. Eligendi nobis dolorem et consectetur totam.', 5, 14, '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(5, 8, 'Corporis molestiae alias impedit eius sint beatae. Voluptas voluptate libero nihil sequi.', 5, 8, '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(6, 3, 'Suscipit explicabo quam fugiat minus expedita.', 5, 88, '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(7, 1, 'Fugit.', 3, 91, '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(8, 8, 'Quam provident reprehenderit est qui.', 1, 60, '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(9, 3, 'Vitae omnis amet vel eos quia. Sed et et nam.', 1, 38, '2022-11-18 18:34:07', '2022-11-18 18:34:07'),
(10, 5, 'Iure praesentium et qui tempore.', 1, 47, '2022-11-18 18:34:07', '2022-11-18 18:34:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tremaine Quigley Sr.', '$2y$10$zXkvoVoziKQf7lHV7x4boucp75UeLiDQLXyIsKemjR./W4ps/PpYC', 'mozelle79@example.org', '2022-11-16 11:50:36', 'ZW3qgOlB55', '2022-11-16 11:50:37', '2022-11-16 11:50:37'),
(2, 'Tre Nienow', '$2y$10$wbXDZNHM/X3u0WqTDOgL3OIozcPP.1vXTA43LDN.8na3jWNktb5qu', 'gaylord.theo@example.net', '2022-11-16 11:50:36', 'wLMEx4TSwR', '2022-11-16 11:50:37', '2022-11-16 11:50:37'),
(3, 'Donavon Kunde IV', '$2y$10$YVivO2gOFWgkqw36h2wRw.73Gmw68IcjMMh3TOJW.i2.ssT2VlvUK', 'roberts.christopher@example.org', '2022-11-16 11:50:36', 'tUFJzW5tqN', '2022-11-16 11:50:37', '2022-11-16 11:50:37'),
(4, 'Pearl Kessler I', '$2y$10$hh9cRjBT7Jv0vwwIHNuWzuamNER4HkyRqiZkWPJYwTyM6zszy6mva', 'george.towne@example.net', '2022-11-16 11:50:37', 'fZgYylbtMS', '2022-11-16 11:50:37', '2022-11-16 11:50:37'),
(5, 'Mr. Richmond Dare', '$2y$10$w0XzihlUzaYnelrA6K0f4eu.FGWVBhSNtlpCHR2MGd61Zetlr/JPC', 'soberbrunner@example.net', '2022-11-16 11:50:37', 'Mv2NztgRZy', '2022-11-16 11:50:37', '2022-11-16 11:50:37'),
(6, 'Rico Schroeder', '$2y$10$Fvw/nVnSzsKZaib4DG9PuOWrCAQbwS3/WPVR.bTI8GXqDq53L72v6', 'schmeler.mia@example.net', '2022-11-16 11:50:37', 'DpJn4SbXVj', '2022-11-16 11:50:37', '2022-11-16 11:50:37'),
(7, 'Lacy Koepp DDS', '$2y$10$vY/6elfDRe8h0GQY97RrBupWnr1ydozQYzhZxAyhCAtRx9H6VUfQu', 'kulas.delta@example.com', '2022-11-16 11:50:37', 'ydNFmOEjy7', '2022-11-16 11:50:37', '2022-11-16 11:50:37'),
(8, 'Lyla Schneider', '$2y$10$JRYQAyUNe/Rg5fijoNhpKesrest3Ky/S5CJSG9sKvJnq9YJla6dCS', 'corwin.sallie@example.com', '2022-11-16 11:50:37', 'FDcNWRSpQf', '2022-11-16 11:50:37', '2022-11-16 11:50:37'),
(9, 'Theo Jacobson', '$2y$10$f1DkvkbCDsiO2aGFzmB9dOLDVsrJ2GO/hb/liSGGNDZWPC9/v/WYS', 'qfritsch@example.net', '2022-11-16 11:50:37', 'DWz6fVmI8d', '2022-11-16 11:50:37', '2022-11-16 11:50:37'),
(10, 'Germaine Brown', '$2y$10$orvLOhx/W.WpqIcSjgOm0uEJt0w6zPHQfEbqjOT8zLK7Ph1DVCPrm', 'keebler.amanda@example.net', '2022-11-16 11:50:37', 'IBZgEkGyPw', '2022-11-16 11:50:37', '2022-11-16 11:50:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `caracteristicas_nombre_unique` (`nombre`);

--
-- Indices de la tabla `caracteristicas_usuarios`
--
ALTER TABLE `caracteristicas_usuarios`
  ADD PRIMARY KEY (`id_usuario`,`id_caracteristica`),
  ADD KEY `caracteristicas_usuarios_id_caracteristica_foreign` (`id_caracteristica`);

--
-- Indices de la tabla `dios`
--
ALTER TABLE `dios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dioses_humanos`
--
ALTER TABLE `dioses_humanos`
  ADD PRIMARY KEY (`id_dios`,`id_humano`),
  ADD KEY `dioses_humanos_id_humano_foreign` (`id_humano`);

--
-- Indices de la tabla `humanos`
--
ALTER TABLE `humanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `pruebas`
--
ALTER TABLE `pruebas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pruebas_id_dios_foreign` (`id_dios`);

--
-- Indices de la tabla `pruebas_humanos`
--
ALTER TABLE `pruebas_humanos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pruebas_humanos_id_prueba_foreign` (`id_prueba`),
  ADD KEY `pruebas_humanos_id_humano_foreign` (`id_humano`);

--
-- Indices de la tabla `pruebas_oraculo`
--
ALTER TABLE `pruebas_oraculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pruebas_oraculo_id_prueba_foreign` (`id_prueba`);

--
-- Indices de la tabla `prueba_oraculo_eleccion`
--
ALTER TABLE `prueba_oraculo_eleccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_oraculo_eleccion_id_prueba_oraculo_foreign` (`id_prueba_oraculo`);

--
-- Indices de la tabla `prueba_oraculo_libre`
--
ALTER TABLE `prueba_oraculo_libre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_oraculo_libre_id_prueba_oraculo_foreign` (`id_prueba_oraculo`);

--
-- Indices de la tabla `prueba_oraculo_valoracion`
--
ALTER TABLE `prueba_oraculo_valoracion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_oraculo_valoracion_id_prueba_oraculo_foreign` (`id_prueba_oraculo`);

--
-- Indices de la tabla `prueba_puntual`
--
ALTER TABLE `prueba_puntual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prueba_puntual_id_prueba_foreign` (`id_prueba`),
  ADD KEY `prueba_puntual_id_caracteristica_foreign` (`id_caracteristica`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `dios`
--
ALTER TABLE `dios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `humanos`
--
ALTER TABLE `humanos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pruebas`
--
ALTER TABLE `pruebas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pruebas_humanos`
--
ALTER TABLE `pruebas_humanos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pruebas_oraculo`
--
ALTER TABLE `pruebas_oraculo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `prueba_oraculo_eleccion`
--
ALTER TABLE `prueba_oraculo_eleccion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `prueba_oraculo_libre`
--
ALTER TABLE `prueba_oraculo_libre`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `prueba_oraculo_valoracion`
--
ALTER TABLE `prueba_oraculo_valoracion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `prueba_puntual`
--
ALTER TABLE `prueba_puntual`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caracteristicas_usuarios`
--
ALTER TABLE `caracteristicas_usuarios`
  ADD CONSTRAINT `caracteristicas_usuarios_id_caracteristica_foreign` FOREIGN KEY (`id_caracteristica`) REFERENCES `caracteristicas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `caracteristicas_usuarios_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `dioses_humanos`
--
ALTER TABLE `dioses_humanos`
  ADD CONSTRAINT `dioses_humanos_id_dios_foreign` FOREIGN KEY (`id_dios`) REFERENCES `dios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `dioses_humanos_id_humano_foreign` FOREIGN KEY (`id_humano`) REFERENCES `humanos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pruebas`
--
ALTER TABLE `pruebas`
  ADD CONSTRAINT `pruebas_id_dios_foreign` FOREIGN KEY (`id_dios`) REFERENCES `dios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pruebas_humanos`
--
ALTER TABLE `pruebas_humanos`
  ADD CONSTRAINT `pruebas_humanos_id_humano_foreign` FOREIGN KEY (`id_humano`) REFERENCES `humanos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pruebas_humanos_id_prueba_foreign` FOREIGN KEY (`id_prueba`) REFERENCES `pruebas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pruebas_oraculo`
--
ALTER TABLE `pruebas_oraculo`
  ADD CONSTRAINT `pruebas_oraculo_id_prueba_foreign` FOREIGN KEY (`id_prueba`) REFERENCES `pruebas` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `prueba_oraculo_eleccion`
--
ALTER TABLE `prueba_oraculo_eleccion`
  ADD CONSTRAINT `prueba_oraculo_eleccion_id_prueba_oraculo_foreign` FOREIGN KEY (`id_prueba_oraculo`) REFERENCES `pruebas_oraculo` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `prueba_oraculo_libre`
--
ALTER TABLE `prueba_oraculo_libre`
  ADD CONSTRAINT `prueba_oraculo_libre_id_prueba_oraculo_foreign` FOREIGN KEY (`id_prueba_oraculo`) REFERENCES `pruebas_oraculo` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `prueba_oraculo_valoracion`
--
ALTER TABLE `prueba_oraculo_valoracion`
  ADD CONSTRAINT `prueba_oraculo_valoracion_id_prueba_oraculo_foreign` FOREIGN KEY (`id_prueba_oraculo`) REFERENCES `pruebas_oraculo` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `prueba_puntual`
--
ALTER TABLE `prueba_puntual`
  ADD CONSTRAINT `prueba_puntual_id_caracteristica_foreign` FOREIGN KEY (`id_caracteristica`) REFERENCES `caracteristicas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `prueba_puntual_id_prueba_foreign` FOREIGN KEY (`id_prueba`) REFERENCES `pruebas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

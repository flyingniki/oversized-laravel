<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('main', function (BreadcrumbTrail $trail) {
  $trail->push('Главная', route('main.index'));
});

Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
  $trail->parent('main');
  $trail->push('О нас', route('main.about'));
});

Breadcrumbs::for('contacts', function (BreadcrumbTrail $trail) {
  $trail->parent('main');
  $trail->push('Контакты', route('main.contacts'));
});

Breadcrumbs::for('services', function (BreadcrumbTrail $trail) {
  $trail->parent('main');
  $trail->push('Услуги', route('services.show'));
});

Breadcrumbs::for('service-detail', function (BreadcrumbTrail $trail, $service) {
  $trail->parent('services');
  $trail->push($service->title, route('service.detail', $service));
});

Breadcrumbs::for('cars', function (BreadcrumbTrail $trail) {
  $trail->parent('main');
  $trail->push('Автопарк', route('cars'));
});

Breadcrumbs::for('projects', function (BreadcrumbTrail $trail) {
  $trail->parent('main');
  $trail->push('Проекты', route('projects.show'));
});

Breadcrumbs::for('project-detail', function (BreadcrumbTrail $trail, $project) {
  $trail->parent('projects');
  $trail->push($project->title, route('project.detail', $project));
});

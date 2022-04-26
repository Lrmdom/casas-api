<?php

namespace App\Controller\Admin;

use App\Entity\Casa;
use App\Entity\Reserva;
use App\Entity\Proprietario;
use App\Entity\Cliente;
use App\Entity\Preco;
use App\Entity\Periodo;
use App\Entity\Tipo;
use App\Entity\Prereserva;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Guestbook');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
        yield MenuItem::linktoRoute('Back to the website', 'fas fa-home', 'homepage');
        yield MenuItem::linkToCrud('Casas', 'fas fa-map-marker-alt', Casa::class);
        yield MenuItem::linkToCrud('Reservas', 'fas fa-comments', Reserva::class);
        yield MenuItem::linkToCrud('Proprietarios', 'fas fa-map-marker-alt', Proprietario::class);
        yield MenuItem::linkToCrud('Clientes', 'fas fa-comments', Cliente::class);
        yield MenuItem::linkToCrud('Precos', 'fas fa-map-marker-alt', Preco::class);
        yield MenuItem::linkToCrud('Periodos Altos ou Baixos', 'fas fa-comments', Periodo::class);
        yield MenuItem::linkToCrud('Tipos Alojamento', 'fas fa-map-marker-alt', Tipo::class);
        yield MenuItem::linkToCrud('Pre-Reservas', 'fas fa-comments', Prereserva::class);
    }
}

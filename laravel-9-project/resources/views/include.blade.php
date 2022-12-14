<p>INCLUDE</p>

{{-- o include é recomendado para componentes estáticos, nos dinamicos é melhor components --}}
@include('components.component', ['name' => 'Componente1'])

{{-- existe uma maneira de verificar se o component existe --}}
@includeIf('components.component1')

@includeWhen(false, 'components.component1')

@includeUnless(true, 'components.component1')

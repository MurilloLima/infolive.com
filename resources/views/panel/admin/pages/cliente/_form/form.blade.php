<div class="modal-body">

    <div class="row">
        <div class="col-md-4">
            <label for="">Tipo</label>
            <div class="form-group{{ $errors->has('tipo') ? ' has-danger' : '' }}">
                <select name="tipo" class="form-control{{ $errors->has('tipo') ? ' has-danger' : '' }}">
                    <option value="">Escolha</option>
                    <option onclick="addCpf('cpf')" value="PF" selected="{{$data->tipo ?? old('tipo')}}">Pessoa fisíca
                    </option>
                    <option onclick="addCnpj('cnpj')" value="PJ">Pessoa jurídica</option>
                </select>
                @if ($errors->has('tipo'))
                <span id="email-error" class="error text-danger">{{ $errors->first('tipo') }}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <label>{{ __('Nome Completo') }}</label>
            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                <input class="form-control{{ $errors->has('name') ? ' has-danger' : '' }}" name="name" type="text"
                    value="{{$data->name ?? old('name')}}" required />
                @if ($errors->has('name'))
                <span id="email-error" class="error text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <label>{{ __('CPF') }}</label>
            <div class="form-group{{ $errors->has('cpf_cnpj') ? ' has-danger' : '' }}">
                <input id="pfj" class="form-control cpf{{ $errors->has('cpf_cnpj') ? ' has-danger' : '' }}"
                    name="cpf_cnpj" type="text" value="{{$data->cpf_cnpj ?? old('cpf_cnpj')}}" required />
                @if ($errors->has('cpf_cnpj'))
                <span id="email-error" class="error text-danger">{{ $errors->first('cpf_cnpj') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <label>{{ __('Data Nasc.') }}</label>
            <div class="form-group">
                <input class="form-control" name="date_nasc" type="date"
                    value="{{$data->date_nasc ?? old('date_nasc')}}" />
            </div>
        </div>
        <div class="col-md-4">
            <label>{{ __('E-mail') }}</label>
            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <input class="form-control{{ $errors->has('email') ? ' has-danger' : '' }}" name="email" type="text"
                    value="{{$data->email ?? old('email')}}" required />
                @if ($errors->has('email'))
                <span id="email-error" class="error text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>{{ __('Endereço') }}</label>
            <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                <input class="form-control{{ $errors->has('address') ? ' has-danger' : '' }}" name="address" type="text"
                    value="{{$data->address ?? old('address')}}" required />
                @if ($errors->has('address'))
                <span id="email-error" class="error text-danger">{{ $errors->first('address') }}</span>
                @endif
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <label>{{ __('Telefone') }}</label>
            <div class="form-group">
                <input class="form-control phone_with_ddd" name="phone" type="text"
                    value="{{$data->phone ?? old('phone')}}" required />
            </div>
        </div>
        <div class="col-md-6">
            <label>{{ __('Cidade') }}</label>
            <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                <input class="form-control{{ $errors->has('city') ? ' has-danger' : '' }}" name="city" type="text"
                    value="{{$data->city ?? old('city')}}" required />
                @if ($errors->has('city'))
                <span id="email-error" class="error text-danger">{{ $errors->first('city') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-2">
            <label>{{ __('UF') }}</label>
            <div class="form-group{{ $errors->has('uf') ? ' has-danger' : '' }}">
                {!! Form::select('uf', [
                'AC' => 'AC',
                'AL' => 'AL',
                'AP' => 'AP',
                'AM' => 'AM',
                'BA' => 'BA',
                'CE' => 'CE',
                'DF' => 'DF',
                'ES' => 'ES',
                'GO' => 'GO',
                'MA' => 'MA',
                'MT' => 'MT',
                'MS' => 'MS',
                'MG' => 'MG',
                'PA' => 'PA',
                'PB' => 'PB',
                'PR' => 'PR',
                'PE' => 'PE',
                'PI' => 'PI',
                'RJ' => 'RJ',
                'RN' => 'RN',
                'RS' => 'RS',
                'RO' => 'RO',
                'RR' => 'RR',
                'SC' => 'SC',
                'SP' => 'SP',
                'SE' => 'SE',
                'TO' => 'TO',
                ], $data->uf ?? old('uf'), ['class'=>'form-control', $errors->has('name') ? ' has-danger' : '' ]) !!}
                @if ($errors->has('uf'))
                <span id="email-error" class="error text-danger">{{ $errors->first('uf') }}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <label>{{ __('Observações') }}</label>
            <div class="form-group">
                <textarea name="obs" class="form-control" rows="5">
                    {{$data->obs ?? old('obs')}}
                </textarea>
            </div>
        </div>
    </div>
</div>


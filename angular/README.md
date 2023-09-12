<h2 style="color:blue">Commandes artisan</h2>
<p>
  <strong>Souscriptions</strong>
</p>

<pre>
  currentContract: Contract
private selectedContractSubject = new Subject<Contract>();
selectedContract$: Observable<Contract> = this.selectedContractSubject.asObservable();


updateContract(contract: Contract): void {
    this.currentContract = contract;
    this.refresh();
}

  
refresh(): void {
	this.selectedContractSubject.next(this.currentContract);
}

this.contractService.selectedContract$
      .pipe(takeUntil(this.destroyed$))
      .subscribe((contract: Contract) => this.onChangeContract(contract)));
</pre>



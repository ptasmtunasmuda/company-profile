<?php

namespace Tests\Unit\Services;

use App\DataTransferObjects\ContactData;
use App\Models\Contact;
use App\Repositories\Contracts\ContactRepositoryInterface;
use App\Services\ContactService;
use Tests\TestCase;
use Mockery;

class ContactServiceTest extends TestCase
{
    private ContactService $contactService;
    private ContactRepositoryInterface $contactRepository;

    protected function setUp(): void
    {
        parent::setUp();

        $this->contactRepository = Mockery::mock(ContactRepositoryInterface::class);
        $this->contactService = new ContactService($this->contactRepository);
    }

    public function test_can_store_contact(): void
    {
        // Arrange
        $contactData = new ContactData(
            name: 'John Doe',
            email: 'john@example.com',
            phone: null,
            subject: 'Test Subject',
            message: 'Test Message'
        );

        $expectedContact = new Contact($contactData->toArray());

        $this->contactRepository
            ->shouldReceive('create')
            ->once()
            ->with($contactData)
            ->andReturn($expectedContact);

        // Act
        $result = $this->contactService->storeContact($contactData);

        // Assert
        $this->assertEquals($expectedContact, $result);
    }
}
